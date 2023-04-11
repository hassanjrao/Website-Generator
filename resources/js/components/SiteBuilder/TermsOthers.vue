<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Terms & other conditions</h6>

            <v-btn color="primary" :loading="loading" @click="submitCreditCards()">Submit</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <!-- show validation error -->


            <v-container>

                <v-row>
                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="displayCategory" inset label="Display Category"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="displayBillingModel" inset label="Display Billing Model"></v-switch>
                    </v-col>


                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="displayRelatedProducts" inset label="Display Related Products"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="onlyShowFirstPrice" inset label="Only Show First Price"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="onlyShowFirstPrice" inset label="Only Show First Price"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="showNavigationCart" inset label="Show Navigation Cart"></v-switch>
                    </v-col>


                    <v-col cols="12" sm="4" md="4">
                        <v-autocomplete label="Sort Products By" :items="sortproductsby" v-model="selectedSortProductBy" ></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="showPopularProducts" inset label="Show Popular Products"></v-switch>
                    </v-col>

                </v-row>


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
        sortproductsby: {
            type: Array,
            required: true
        }
    },

    validations: {
        selectedCreditCards: {
            required
        }
    },

    data() {

        return {
            loading: false,
            siteId: null,
            displayCategory: false,
            displayBillingModel: true,
            displayRelatedProducts: true,
            onlyShowFirstPrice: false,
            validationError: 'Please select at least one credit card.',
            selectedSortProductBy: 1,
            showNavigationCart: true,
            showPopularProducts: true,

        }
    },


    methods: {

        submitCreditCards() {
            this.$v.$touch();


            if (!this.$v.$error) {
                this.loading = true;
                axios.post('/sites/submit-site-credit-card', {
                    site_id: this.siteId,
                    credit_card_ids: this.selectedCreditCards
                })
                    .then(response => {
                        this.loading = false;
                        this.showStatus(response.data.message, 'success');
                    })
                    .catch(error => {
                        this.loading = false;
                        this.showStatus(error.response.data.message, 'error');
                    });
            }
        }
    },

    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;
    }
}

</script>
