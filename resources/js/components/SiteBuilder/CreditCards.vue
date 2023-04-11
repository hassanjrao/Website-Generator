<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Credit Cards</h6>

            <v-btn color="primary" :loading="loading" @click="submitCreditCards()">Submit</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <!-- show validation error -->

            <v-alert dense outlined type="error" v-if="$v.$error" >
                {{ validationError }}
            </v-alert>

            <v-container>

                <v-row>
                    <v-col cols="12" sm="4" md="4" v-for="creditCard in creditcards" :key="creditCard.id">

                        <v-checkbox v-model="selectedCreditCards" :value="creditCard.id" class="my-4">
                            <template v-slot:label>
                                <v-card>
                                    <v-card-text>
                                        <v-img :src="creditCard.image"></v-img>
                                    </v-card-text>
                                </v-card>
                            </template>
                        </v-checkbox>

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
        creditcards: {
            type: Array,
            required: true
        },
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
            selectedCreditCards: [1],
            validationError: 'Please select at least one credit card.'
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
                        this.showStatus(response.data.message,'success');
                    })
                    .catch(error => {
                        this.loading = false;
                        this.showStatus(error.response.data.message,'error');
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
