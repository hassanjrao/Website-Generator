<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Generate Site</h6>

            <v-btn color="primary" :loading="loading" @click="generateSite"
                :disabled="!requiredSteps.every(step => step.submitted)"
            >Generate</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <v-container>

                <div>
                    <v-alert dense outlined :type="step.submitted ? 'success':'error'" v-for="step in requiredSteps" :key="step.label">
                        {{ step.message }}
                    </v-alert>




                </div>

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
        stepsRequired: {
            type: Array,
            required: true
        },

    },


    data() {

        return {
            loading: false,
            siteId: null,
            downloadAble:false,
            requiredSteps:[],
        }
    },

    watch: {
        requiredSteps() {
            console.log("steppss",this.requiredSteps);
        }
    },




    methods: {
        generateSite() {
            window.open('/sites/download/' + this.siteId, '_blank');
        }
    },
    created() {
        this.showStatus = alert.showStatus;

        this.siteId = this.site_id;

        this.requiredSteps = this.stepsRequired;

        console.log(this.requiredSteps);

    },
    mounted() {
        console.log("generate mounted");
    }
}

</script>
