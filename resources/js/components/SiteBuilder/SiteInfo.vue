<template>
    <v-app app>


        <!-- header -->
        <v-card-title  class="d-flex justify-content-between">
            <h6 class="headline mb-0">Site Information</h6>

            <v-btn color="primary" :loading="loading" @click="submitSiteInfo">Submit</v-btn>
        </v-card-title>

        <!-- divider -->

        <v-divider></v-divider>

        <!-- body -->
        <v-card-text>
            <v-container>
                <v-row>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.name" label="Site Name" required
                            @input="$v.site_info.name.$touch()" :error-messages="siteNameErrors"
                            @blur="$v.site_info.name.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field type="url" v-model="site_info.url" label="URL" required
                            @input="$v.site_info.url.$touch()" :error-messages="urlErrors"
                            @blur="$v.site_info.url.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.email" label="Email" required @input="$v.site_info.email.$touch()"
                            :error-messages="emailErrors" @blur="$v.site_info.email.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.phone" label="Phone" required @input="$v.site_info.phone.$touch()"
                            :error-messages="phoneErrors" @blur="$v.site_info.phone.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.address" label="Address" required
                            @input="$v.site_info.address.$touch()" :error-messages="addressErrors"
                            @blur="$v.site_info.address.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.corp_name" label="Corp. Name" required
                            @input="$v.site_info.corp_name.$touch()" :error-messages="corpNameErrors"
                            @blur="$v.site_info.corp_name.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="6">
                        <v-textarea v-model="site_info.description" label="Description" required rows="1" auto-grow
                            @input="$v.site_info.description.$touch()" :error-messages="descriptionErrors"
                            @blur="$v.site_info.description.$touch()"></v-textarea>
                    </v-col>

                    <v-col cols="12" sm="6" md="6">
                        <v-text-field v-model="site_info.return_address" label="Return Address" required
                            @input="$v.site_info.return_address.$touch()" :error-messages="returnAddressErrors"
                            @blur="$v.site_info.return_address.$touch()"></v-text-field>
                    </v-col>


                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.fulfillment" label="Fulfillment" required
                            @input="$v.site_info.fulfillment.$touch()" :error-messages="fulfillmentErrors"
                            @blur="$v.site_info.fulfillment.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.trial_period" label="Trial Period" required
                            @input="$v.site_info.trial_period.$touch()"
                            :error-messages="trialPeriodErrors"
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
                        <v-text-field v-model="site_info.style_sheet" label="Style Sheet" required
                            @input="$v.site_info.style_sheet.$touch()" :error-messages="styleSheetErrors"
                            @blur="$v.site_info.style_sheet.$touch()"></v-text-field>

                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field v-model="site_info.customer_service_hours" label="Customer Service Hours" required
                            @input="$v.site_info.customer_service_hours.$touch()"
                            :error-messages="customerServiceHoursErrors"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">
                        <v-text-field type="number" v-model.number="site_info.maximum_ticket_value" label="Maximum Ticket Value" required
                            @input="$v.site_info.maximum_ticket_value.$touch()"
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
            name: {
                required
            },
            url: {
                required
            },
            email: {
                required,
                email
            },
            phone: {
                required
            },
            address: {
                required
            },
            corp_name: {
                required
            },
            description: {
                required
            },
            return_address: {
                required
            },
            fulfillment: {
                required
            },
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
            style_sheet: {
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
        }
    },

    computed: {
        siteNameErrors() {
            const errors = []
            if (!this.$v.site_info.name.$dirty) return errors
            !this.$v.site_info.name.required && errors.push('Site name is required.')
            return errors
        },
        urlErrors() {
            const errors = []
            if (!this.$v.site_info.url.$dirty) return errors
            !this.$v.site_info.url.required && errors.push('Site url is required.')
            return errors
        },
        emailErrors() {
            const errors = []
            if (!this.$v.site_info.email.$dirty) return errors
            !this.$v.site_info.email.required && errors.push('Email is required.')
            !this.$v.site_info.email.email && errors.push('Email must be valid.')
            return errors
        },
        phoneErrors() {
            const errors = []
            if (!this.$v.site_info.phone.$dirty) return errors
            !this.$v.site_info.phone.required && errors.push('Phone is required.')
            return errors
        },
        addressErrors() {
            const errors = []
            if (!this.$v.site_info.address.$dirty) return errors
            !this.$v.site_info.address.required && errors.push('Address is required.')
            return errors
        },
        corpNameErrors() {
            const errors = []
            if (!this.$v.site_info.corp_name.$dirty) return errors
            !this.$v.site_info.corp_name.required && errors.push('Corp name is required.')
            return errors
        },
        descriptionErrors() {
            const errors = []
            if (!this.$v.site_info.description.$dirty) return errors
            !this.$v.site_info.description.required && errors.push('Description is required.')
            return errors
        },
        returnAddressErrors() {
            const errors = []
            if (!this.$v.site_info.return_address.$dirty) return errors
            !this.$v.site_info.return_address.required && errors.push('Return address is required.')
            return errors
        },
        fulfillmentErrors() {
            const errors = []
            if (!this.$v.site_info.fulfillment.$dirty) return errors
            !this.$v.site_info.fulfillment.required && errors.push('Fulfillment is required.')
            return errors
        },
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
        submitSiteInfo() {
            this.$v.$touch()
            if (this.$v.$invalid) {
                return
            }

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
        console.log('Site info.',this.site_info);
        this.siteId = this.site_id
    },


    created() {
        this.showStatus = alert.showStatus;
    }
}

</script>
