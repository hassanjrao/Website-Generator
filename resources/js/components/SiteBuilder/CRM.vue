<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">CRM</h6>

            <v-btn color="primary" :loading="loading" @click="submitTermsOthers()">Submit</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <!-- show validation error -->


            <v-container>

                <v-row>


                    <v-col cols="12" sm="4" md="4">
                        <v-autocomplete label="Advertising Company" clearable :items="advertisingcompanies"
                            v-model="selectedAdvertisingCompany" required @input="$v.selectedAdvertisingCompany.$touch()"
                            :error-messages="selectedAdvertisingCompanyErrors"
                            @blur="$v.selectedAdvertisingCompany.$touch()"></v-autocomplete>

                    </v-col>

                    <v-col cols="12" sm="8" md="8" v-if="selectedAdvertisingCompany">

                        <v-row>

                            <v-col cols="12" sm="12" md="4" v-for="crmSetting in crmSettings" :key="crmSetting.label">
                                <v-text-field :label="crmSetting.label" v-model="crmSetting.model"></v-text-field>
                            </v-col>

                        </v-row>

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
        advertisingcompanies: {
            type: Array,
            required: true
        }
    },

    validations: {
        selectedAdvertisingCompany: {
            required
        },

    },

    data() {

        return {
            loading: false,
            siteId: null,
            selectedAdvertisingCompany: null,
            url: null,
            crmSettings: [
                {
                    label: 'URL',
                    model: 'url'
                },
                {
                    label: 'Username',
                    model: 'username'
                },
                {
                    label: 'Password',
                    model: 'password'
                },
                {
                    label: 'Shipping Id',
                    model: 'shipping_id'
                },
                {
                    label: 'Compaign Id',
                    model: 'compaign_id'
                },
                {
                    label: 'Tran type',
                    model: 'tran_type'
                },
                {
                    label: 'Offer Id',
                    model: 'offer_id'
                },
                {
                    label: 'Billing Model Id',
                    model: 'billing_model_id'
                },
                {
                    label: 'Gateway Id',
                    model: 'gateway_id'
                }
            ],


        }
    },


    methods: {

        submitTermsOthers() {
            this.$v.$touch();


            if (!this.$v.$error) {
                this.loading = true;
                axios.post('/sites/submit-site-crm-settings', {
                    site_id: this.siteId,
                    advertising_company_id: this.selectedAdvertisingCompany,
                })
                    .then(response => {
                        this.loading = false;
                        this.showStatus(response.data.message, 'success');


                        this.$emit('crmSubmitted', true)
                    })
                    .catch(error => {
                        this.loading = false;
                        this.showStatus(error.response.data.message, 'error');
                    });
            }
        }
    },

    watch: {
        selectedAdvertisingCompany: function (newValue, oldValue) {

            console.log(newValue);

            let advertisingCompany = this.advertisingcompanies.find(advertisingCompany => advertisingCompany.value === newValue);


            this.crmSettings[0]['model'] = advertisingCompany.url;
            this.crmSettings[1]['model'] = advertisingCompany.username
            this.crmSettings[2]['model'] = advertisingCompany.password
            this.crmSettings[3]['model'] = advertisingCompany.shipping_id
            this.crmSettings[4]['model'] = advertisingCompany.compaign_id
            this.crmSettings[5]['model'] = advertisingCompany.tran_type
            this.crmSettings[6]['model'] = advertisingCompany.offer_id
            this.crmSettings[7]['model'] = advertisingCompany.billing_model_id
            this.crmSettings[8]['model'] = advertisingCompany.gateway_id

        }
    }
    ,
    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;
    },

    computed: {
        selectedAdvertisingCompanyErrors() {
            const errors = [];
            if (!this.$v.selectedAdvertisingCompany.$dirty) return errors;
            !this.$v.selectedAdvertisingCompany.required && errors.push('Advertising Company is required.');
            return errors;
        },

    }
}

</script>
