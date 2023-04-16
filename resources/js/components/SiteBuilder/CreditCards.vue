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

            <v-alert dense outlined type="error" v-if="$v.$error">
                {{ validationError }}
            </v-alert>

            <!-- <v-container>

                <v-row v-for="creditCard in creditcards" :key="creditCard.id + 'set'">

                    <v-col cols="12" sm="12" md="12">
                        <v-checkbox v-model="selectedCreditCard" :value="creditCard.id" class="my-4">
                            <template v-slot:label>
                                <v-card>
                                    <v-card-title>
                                        {{ creditCard.name }}

                                    </v-card-title>


                                    <v-card-text>
                                        <v-row>
                                            <v-col cols="12" sm="4" md="4" v-for="creditCardItem in creditCard.items"
                                                :key="creditCardItem.id">

                                                {{ creditCardItem.name }}
                                                <v-img :src="creditCardItem.image"></v-img>

                                            </v-col>
                                        </v-row>
                                    </v-card-text>

                                </v-card>
                            </template>
                        </v-checkbox>

                    </v-col>
                </v-row>


            </v-container> -->



            <v-container>

                <v-radio-group v-model="selectedCreditCard">

                    <v-radio v-for="creditCard in creditcards" :key="creditCard.id + 'set'" :value="creditCard.id"
                        class="my-4">
                        <template v-slot:label>

                            <v-card>

                                <v-card-title>
                                    <h4>{{ creditCard.name }}</h4>
                                </v-card-title>

                                <v-card-text>

                                    <v-row>

                                        <v-col cols="12" sm="4" md="4" v-for="creditCardItem in creditCard.items"
                                            :key="creditCardItem.id">
                                            <v-card>
                                                <v-card-text>
                                                    <h5>{{ creditCardItem.name }}</h5>
                                                    <v-img :src="creditCardItem.image"></v-img>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>

                                    </v-row>

                                    <!-- <v-img :src="creditCard.image" height="100px" width="100px"></v-img> -->
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
        creditcards: {
            type: Array,
            required: true
        },
    },

    validations: {
        selectedCreditCard: {
            required
        }
    },

    data() {

        return {
            loading: false,
            siteId: null,
            selectedCreditCard: 1,
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
                    credit_card_set_id: this.selectedCreditCard
                })
                    .then(response => {
                        this.loading = false;
                        this.showStatus(response.data.message, 'success');

                        this.$emit('creditCardSubmitted', true)
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

        console.log(this.creditcards);
    }
}

</script>
