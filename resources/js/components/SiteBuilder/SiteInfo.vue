<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Site Information</h6>

            <v-btn color="primary" :loading="loading" @click="submitButtonClicked">Submit</v-btn>
        </v-card-title>

        <!-- divider -->

        <v-divider></v-divider>

        <!-- body -->
        <v-card-text>
            <v-container>
                <v-row>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="name" v-model="site_info.name" label="DBA" ></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="url" type="url" v-model="site_info.url" label="URL"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="email" v-model="site_info.email" label="Email"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="phone" v-model="site_info.phone" label="Phone"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="address" v-model="site_info.address" label="Address"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="corp_name" v-model="site_info.corp_name" label="Corp. Name"></v-text-field>
                    </v-col>

                    <!-- <v-col cols="12" sm="6" md="6">
                        <v-textarea v-model="site_info.description" label="Description" required rows="1" auto-grow
                            @input="$v.site_info.description.$touch()" :error-messages="descriptionErrors"
                            @blur="$v.site_info.description.$touch()"></v-textarea>
                    </v-col> -->

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field ref="fulfillment" v-model="site_info.fulfillment" label="Fulfillment"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="6">
                        <v-text-field ref="return_address" v-model="site_info.return_address" label="Return Address"></v-text-field>
                    </v-col>




                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.trial_period" label="Trial Period" required
                            @input="$v.site_info.trial_period.$touch()" :error-messages="trialPeriodErrors"
                            @blur="$v.site_info.trial_period.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.trial_period_breakdown" label="Trial Period Breakdown" required
                            @input="$v.site_info.trial_period_breakdown.$touch()"
                            :error-messages="trialPeriodBreakdownErrors"
                            @blur="$v.site_info.trial_period_breakdown.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.shipping_period" label="Shipping Period" required
                            @input="$v.site_info.shipping_period.$touch()" :error-messages="shippingPeriodErrors"
                            @blur="$v.site_info.shipping_period.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.shipping_carrier" label="Shipping Carrier" required
                            @input="$v.site_info.shipping_carrier.$touch()" :error-messages="shippingCarrierErrors"
                            @blur="$v.site_info.shipping_carrier.$touch()"></v-text-field>

                    </v-col>



                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.customer_service_hours" label="Customer Service Hours" required
                            @input="$v.site_info.customer_service_hours.$touch()"
                            :error-messages="customerServiceHoursErrors"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field type="number" v-model.number="site_info.maximum_ticket_value"
                            label="Maximum Ticket Value" required @input="$v.site_info.maximum_ticket_value.$touch()"
                            :error-messages="maximumTicketValueErrors"></v-text-field>
                    </v-col>


                </v-row>

                <!-- submit button -->


            </v-container>
        </v-card-text>



    </v-app>
</template>


<script>

import { required, requiredIf, email } from 'vuelidate/lib/validators'
import alert from '../../shared/alert'


export default {

    props: {
        site_info: {
            type: Array,
            required: true
        },
        site_id: {
            type: Number,
            required: false
        }
    },

    validations: {
        site_info: {


            trial_period: {
                required
            },
            trial_period_breakdown: {
                required
            },
            shipping_period: {
                required
            },
            shipping_carrier: {
                required
            },

            customer_service_hours: {
                required
            },
            maximum_ticket_value: {
                required,

            }
        }
    },

    data() {
        return {
            loading: false,
            siteId: null,
            focusColor: ""
        }
    },

    computed: {


        trialPeriodBreakdownErrors() {
            const errors = []
            if (!this.$v.site_info.trial_period_breakdown.$dirty) return errors
            !this.$v.site_info.trial_period_breakdown.required && errors.push('Trial period breakdown is required.')
            return errors
        },
        trialPeriodErrors() {
            const errors = []
            if (!this.$v.site_info.trial_period.$dirty) return errors
            !this.$v.site_info.trial_period.required && errors.push('Trial period is required.')
            return errors
        },
        shippingPeriodErrors() {
            const errors = []
            if (!this.$v.site_info.shipping_period.$dirty) return errors
            !this.$v.site_info.shipping_period.required && errors.push('Shipping period is required.')
            return errors
        },
        shippingCarrierErrors() {
            const errors = []
            if (!this.$v.site_info.shipping_carrier.$dirty) return errors
            !this.$v.site_info.shipping_carrier.required && errors.push('Shipping carrier is required.')
            return errors
        },
        styleSheetErrors() {
            const errors = []
            if (!this.$v.site_info.style_sheet.$dirty) return errors
            !this.$v.site_info.style_sheet.required && errors.push('Style sheet is required.')
            return errors
        },
        customerServiceHoursErrors() {
            const errors = []
            if (!this.$v.site_info.customer_service_hours.$dirty) return errors
            !this.$v.site_info.customer_service_hours.required && errors.push('Customer service hours is required.')
            return errors
        },
        maximumTicketValueErrors() {
            const errors = []
            if (!this.$v.site_info.maximum_ticket_value.$dirty) return errors
            !this.$v.site_info.maximum_ticket_value.required && errors.push('Maximum ticket value is required.')
            return errors
        }



    },


    methods: {

        emptyFields() {
            let emptyFields = [];

            for (let [key, value] of Object.entries(this.site_info)) {
                if ((value == null || value == "") && key!="description") {
                    emptyFields.push(key);
                }
            }

            return emptyFields;
        },

        submitButtonClicked() {


            this.$v.$touch()
            if (this.$v.$invalid) {
                return
            }



            let emptyFields = this.emptyFields();


            if (emptyFields.length > 0) {

                let msg = "Are you sure? Following fields are empty ";

                emptyFields.forEach(element => {
                    element = element.replace('_', " ")

                    msg += element + ", "
                });

                Swal.fire({
                    title: 'Are you sure?',
                    text: msg,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (!result.isConfirmed) {


                        // this.focusColor = "#F44336"

                        console.log(emptyFields);

                        emptyFields.forEach(element => {

                            this.$refs[element].error=true

                        });


                        return
                    }
                    else {
                        this.submitSiteInfo()
                    }
                })

            } else {
                this.submitSiteInfo()
            }
        },

        submitSiteInfo() {



            this.loading = true
            axios.post('/sites/create-site', {
                site_name: this.site_info.name,
                url: this.site_info.url,
                email: this.site_info.email,
                phone: this.site_info.phone,
                address: this.site_info.address,
                corp_name: this.site_info.corp_name,
                description: this.site_info.description,
                return_address: this.site_info.return_address,
                fulfillment: this.site_info.fulfillment,
                trial_period_breakdown: this.site_info.trial_period_breakdown,
                trial_period: this.site_info.trial_period,
                shipping_period: this.site_info.shipping_period,
                shipping_carrier: this.site_info.shipping_carrier,
                style_sheet: this.site_info.style_sheet,
                customer_service_hours: this.site_info.customer_service_hours,
                maximum_ticket_value: this.site_info.maximum_ticket_value,
                site_id: this.siteId


            })
                .then(response => {
                    this.loading = false
                    this.siteId = response.data.data.site_id
                    this.showStatus(response.data.message, "success")

                    this.$emit('siteIdGenerated', this.siteId)
                })
                .catch(error => {
                    console.log(error)
                    this.loading = false
                    this.showStatus(error.response.data.message, "error")
                })
        }
    },

    mounted() {
        console.log('Site info.', this.site_info);
        this.siteId = this.site_id
    },


    created() {
        this.showStatus = alert.showStatus;
        this.showWarning = alert.showWarning;
    }
}

</script>
