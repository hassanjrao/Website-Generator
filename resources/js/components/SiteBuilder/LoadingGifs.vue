<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Loading Gifs</h6>

            <div class="d-flex justify-content-center">
                <v-btn color="secondary" class="mr-2"  @click="randomize">Randomize</v-btn>

                <v-btn color="primary" :loading="loading" @click="submitSiteLoadingGif">Submit</v-btn>

            </div>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <v-container>

                <v-radio-group v-model="selectedLoadingGif" row>

                    <v-radio v-for="loadinggif in loadinggifs" :key="loadinggif.id" :value="loadinggif.id" class="my-4">
                        <template v-slot:label>

                            <v-card>
                                <v-card-text>
                                    <v-img :src="loadinggif.image" height="100px" width="100px"></v-img>
                                </v-card-text>
                            </v-card>


                        </template>
                    </v-radio>

                </v-radio-group>

            </v-container>

        </v-card-text>

    </v-app>
</template>

<script>

import { required } from 'vuelidate/lib/validators'
import alert from '../../shared/alert'


export default {

    props: {
        site_id: {
            type: Number,
            required: true
        },
        loadinggifs: {
            type: Array,
            required: true
        },
    },


    data() {

        return {
            loading: false,
            siteId: null,
            selectedLoadingGif: 1,
        }
    },




    methods: {

        randomize() {

            let random=this.loadinggifs[Math.floor(Math.random()*this.loadinggifs.length)].id;

            if(random==this.selectedLoadingGif){
                this.randomize();
            }else{
                this.selectedLoadingGif=random;
            }

            console.log(this.selectedLoadingGif);

        },

        submitSiteLoadingGif() {
            this.loading = true;
            axios.post('/sites/submit-site-loading-gif', {
                site_id: this.site_id,
                loading_gif_id: this.selectedLoadingGif,
            })
                .then(response => {
                    this.loading = false;

                    this.showStatus(response.data.message, 'success');

                    this.$emit('loadingGifsSubmitted', true)
                })
                .catch(error => {
                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error');
                });
        }
    },
    created() {
        this.showStatus = alert.showStatus;

    }
}

</script>
