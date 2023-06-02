<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteTemplate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function headerTemplate()
    {
        return $this->belongsTo(HeaderTemplate::class)->withTrashed();
    }

    public function footerTemplate()
    {
        return $this->belongsTo(FooterTemplate::class)->withTrashed();
    }

    public function heroSection()
    {
        return $this->belongsTo(HeroSection::class)->withTrashed();
    }

    public function aboutSection()
    {
        return $this->belongsTo(AboutSection::class)->withTrashed();
    }

    public function productSection()
    {
        return $this->belongsTo(ProductSection::class)->withTrashed();
    }

    public function relatedProductSection()
    {
        return $this->belongsTo(RelatedProductSection::class)->withTrashed();
    }

    public function popularProductSection()
    {
        return $this->belongsTo(PopularProductSection::class)->withTrashed();
    }

    public function ctaSection()
    {
        return $this->belongsTo(CtaSection::class)->withTrashed();
    }

    public function contactSection(){
        return $this->belongsTo(ContactSection::class)->withTrashed();
    }


    public function featureSection(){
        return $this->belongsTo(FeatureSection::class)->withTrashed();
    }

    public function productPage(){
        return $this->belongsTo(ProductPage::class)->withTrashed();
    }

    public function checkoutPage(){
        return $this->belongsTo(CheckoutPage::class)->withTrashed();
    }

    public function contactPage(){
        return $this->belongsTo(ContactPage::class)->withTrashed();
    }

    public function cartPage(){
        return $this->belongsTo(CartPage::class)->withTrashed();
    }

    public function navigationPage(){
        return $this->belongsTo(NavigationPage::class)->withTrashed();
    }


}
