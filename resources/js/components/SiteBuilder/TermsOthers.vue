<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Terms & other conditions</h6>

            <v-btn color="primary" :loading="loading" @click="submitTermsOthers()">Submit</v-btn>

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
                        <v-switch v-model="showNavigationCart" inset label="Show Navigation Cart"></v-switch>
                    </v-col>


                    <v-col cols="12" sm="4" md="4">
                        <v-autocomplete label="Sort Products By" :items="sortproductsby"
                            v-model="selectedSortProductBy"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="showPopularProducts" inset label="Show Popular Products"></v-switch>
                    </v-col>


                    <v-col cols="12" sm="4" md="4" v-if="showPopularProducts">
                        <v-slider hint="Im a hint" max="50" min="-50" v-model="popularProducts" label="Popular Products"
                            class="mt-4"></v-slider>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="oneProductCartLimit" inset label="One Product Card Limit"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch v-model="shippingOption" inset label="Shipping Option"></v-switch>
                    </v-col>


                    <v-col cols="12" sm="4" md="4" v-if="shippingOption">
                        <v-text-field label="Shipping Name" v-model="shippingName" @input="$v.shippingName.$touch()"
                            :error-messages="shippingNameErrors" @blur="$v.shippingName.$touch()"></v-text-field>
                    </v-col>


                    <v-col cols="12" sm="4" md="4" v-if="shippingOption">
                        <v-text-field label="Shipping Price" v-model.number="shippingPrice"
                            @input="$v.shippingPrice.$touch()" :error-messages="shippingPriceErrors"
                            @blur="$v.shippingPrice.$touch()"></v-text-field>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch inset label="Generic Terms" v-model.number="genericTerms"></v-switch>
                    </v-col>

                    <v-col cols="12" sm="4" md="4">
                        <v-switch inset label="Individual Product Terms" v-model.number="individualProductTerms"></v-switch>
                    </v-col>
                    <v-col cols="12" sm="4" md="4">
                        <v-switch inset label="Total Price Terms" v-model.number="totalPriceTerms"></v-switch>
                    </v-col>


                </v-row>


            </v-container>

        </v-card-text>

    </v-app>
</template>

<script>

import { required, requiredIf } from 'vuelidate/lib/validators'
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
        shippingName: {
            required: requiredIf(function () {
                return this.shippingOption;
            })
        },
        shippingPrice: {
            required: requiredIf(function () {
                return this.shippingOption;
            }),
            numeric: function (value) {
                return !isNaN(parseFloat(value));
            }
        },
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
            showPopularProducts: false,
            popularProducts: 0,
            oneProductCartLimit: false,
            shippingOption: false,
            shippingName: '',
            shippingPrice: 0,
            genericTerms: true,
            individualProductTerms: true,
            totalPriceTerms: false,
        }
    },


    methods: {

        submitTermsOthers() {
            this.$v.$touch();


            if (!this.$v.$error) {
                this.loading = true;
                axios.post('/sites/submit-site-terms-others', {
                    site_id: this.siteId,
                    display_category: this.displayCategory,
                    display_billing_model: this.displayBillingModel,
                    display_related_products: this.displayRelatedProducts,
                    only_show_first_price: this.onlyShowFirstPrice,
                    show_navigation_cart: this.showNavigationCart,
                    show_popular_products: this.showPopularProducts,
                    popular_products: this.popularProducts,
                    one_product_cart_limit: this.oneProductCartLimit,
                    shipping_option: this.shippingOption,
                    shipping_name: this.shippingName,
                    shipping_price: this.shippingPrice,
                    generic_terms: this.genericTerms,
                    individual_product_terms: this.individualProductTerms,
                    total_price_terms: this.totalPriceTerms,
                    sort_product_by_id: this.selectedSortProductBy,

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
    },

    computed: {
        shippingNameErrors() {
            const errors = [];
            if (!this.$v.shippingName.$dirty) return errors;
            !this.$v.shippingName.required && errors.push('Shipping Name is required.');
            return errors;
        },
        shippingPriceErrors() {
            const errors = [];
            if (!this.$v.shippingPrice.$dirty) return errors;
            !this.$v.shippingPrice.required && errors.push('Shipping Price is required.');
            !this.$v.shippingPrice.numeric && errors.push('Shipping Price must be numeric.');
            return errors;
        },
    }
}

</script>
