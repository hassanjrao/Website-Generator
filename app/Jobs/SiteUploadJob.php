<?php

namespace App\Jobs;

use App\Notifications\SiteUploadStatusNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SiteUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $path;
    public $serverDetails;
    public $user;
    public $site;
    public function __construct($path, $serverDetails, $user, $site)
    {
        $this->path = $path;
        $this->serverDetails = $serverDetails;
        $this->user = $user;
        $this->site = $site;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {


        try {



            $server = Storage::createFtpDriver($this->serverDetails);

            $path = $this->path;



            // upload each file and folder to the server

            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));


            foreach ($files as $name => $file) {

                // We're skipping all subfolders
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();

                    // extracting filename with substr/strlen

                    $relativePath =  substr($filePath, strlen($path) + 1);

                    $relativePathArr = explode(DIRECTORY_SEPARATOR, $relativePath);

                    $relativePath = implode(DIRECTORY_SEPARATOR, array_slice($relativePathArr, 1));

                    $server->put($relativePath, $filePath);
                }
            }

            Log::info("SiteUploadJob Success: ", [
                "message" => "Site uploaded successfully",
            ]);


            $this->user->notify(new SiteUploadStatusNotification($this->site,"{$this->site->name} Site  uploaded successfully"));

        } catch (\League\Flysystem\FTP\FtpConnectionException | \ErrorException $e) {

            Log::error("SiteUploadJob Error: ", [
                "message" => $e->getMessage(),
                "line" => $e->getLine(),
                "trace" => $e->getTraceAsString(),
            ]);

            $this->user->notify(new SiteUploadStatusNotification($this->site,"{$this->site->name} Site  upload failed, please check your ftp details and try again"));



        } catch (\Exception $e) {

            Log::error("SiteUploadJob Error: ", [
                "message" => $e->getMessage(),
                "line" => $e->getLine(),
                "trace" => $e->getTraceAsString(),
            ]);

            $this->user->notify(new SiteUploadStatusNotification($this->site,"{$this->site->name} Site upload failed, please check your ftp details and try again"));


        }
    }
}
