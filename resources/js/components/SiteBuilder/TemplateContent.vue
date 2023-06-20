<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Template</h6>

            <div class="d-flex justify-content-center">
                <v-btn color="secondary" class="mr-2" @click="randomize">Randomize</v-btn>

                <v-btn color="primary" :loading="loading" @click="submitSiteTemplate">Submit</v-btn>
            </div>

        </v-card-title>


        <!-- divider -->

        <v-divider></v-divider>

        <!-- body -->
        <v-card-text>

            <v-row>
                <v-col cols="12" sm="12" md="12">

                    <v-card>

                        <v-card-title>
                            <h3 class="headline mb-0">Landing Page</h3>
                        </v-card-title>

                        <v-card-text>

                            <v-row>

                                <v-col cols="12" sm="6" md="4">


                                    <v-autocomplete label="Header Template" clearable :items="headertemplates"
                                        v-model="selectedHeaderTemplate" required
                                        @input="$v.selectedHeaderTemplate.$touch()"
                                        :error-messages="selectedHeaderTemplateErrors"
                                        @blur="$v.selectedHeaderTemplate.$touch()"></v-autocomplete>

                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('heroSection')">

                                    <v-autocomplete label="Hero Section" clearable :items="herosections"
                                        v-model="selectedHeroSection" required @input="$v.selectedHeroSection.$touch()"
                                        :error-messages="selectedHeroSectionErrors"
                                        @blur="$v.selectedHeroSection.$touch()"></v-autocomplete>
                                </v-col>



                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('productSection')">

                                    <v-autocomplete label="Product Section" clearable :items="productsections"
                                        v-model="selectedProductSection" required
                                        @input="$v.selectedProductSection.$touch()"
                                        :error-messages="selectedProductSectionErrors"
                                        @blur="$v.selectedProductSection.$touch()"></v-autocomplete>
                                </v-col>



                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Related Product Section" clearable
                                        :items="relatedproductsections" v-model="selectedRelatedProductSection" required
                                        @input="$v.selectedRelatedProductSection.$touch()"
                                        :error-messages="selectedRelatedProductSectionErrors"
                                        @blur="$v.selectedRelatedProductSection.$touch()"></v-autocomplete>
                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('aboutSection')">

                                    <v-autocomplete label="About Section" clearable :items="aboutsections"
                                        v-model="selectedAboutSection" required @input="$v.selectedAboutSection.$touch()"
                                        :error-messages="selectedAboutSectionErrors"
                                        @blur="$v.selectedAboutSection.$touch()"></v-autocomplete>


                                </v-col>



                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('contactSection')">

                                    <v-autocomplete label="Contact Section" clearable :items="contactsections"
                                        v-model="selectedContactSection" required
                                        @input="$v.selectedContactSection.$touch()"
                                        :error-messages="selectedContactSectionErrors"
                                        @blur="$v.selectedContactSection.$touch()"></v-autocomplete>
                                </v-col>






                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('popularProductsection')">

                                    <v-autocomplete label="Popular Product Section" clearable
                                        :items="popularproductsections" v-model="selectedPopularProductSection" required
                                        @input="$v.selectedPopularProductSection.$touch()"
                                        :error-messages="selectedPopularProductSectionErrors"
                                        @blur="$v.selectedPopularProductSection.$touch()"></v-autocomplete>
                                </v-col>


                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('ctaSection')">

                                    <v-autocomplete label="CTA Section" clearable :items="ctasections"
                                        v-model="selectedCtaSection" required @input="$v.selectedCtaSection.$touch()"
                                        :error-messages="selectedCtaSectionErrors"
                                        @blur="$v.selectedCtaSection.$touch()"></v-autocomplete>
                                </v-col>



                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('featuresSection')">

                                    <v-autocomplete label="Feature Section" clearable :items="featuresections"
                                        v-model="selectedFeatureSection" required
                                        @input="$v.selectedFeatureSection.$touch()"
                                        :error-messages="selectedFeatureSectionErrors"
                                        @blur="$v.selectedFeatureSection.$touch()"></v-autocomplete>
                                </v-col>



                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Footer Template" clearable :items="footertemplates"
                                        v-model="selectedFooterTemplate" required
                                        @input="$v.selectedFooterTemplate.$touch()"
                                        :error-messages="selectedFooterTemplateErrors"
                                        @blur="$v.selectedFooterTemplate.$touch()"></v-autocomplete>
                                </v-col>




                            </v-row>


                        </v-card-text>

                    </v-card>
                </v-col>




                <v-col cols="12" sm="12" md="12">

                    <v-card>

                        <v-card-title>
                            <h3 class="headline mb-0">Pages</h3>
                        </v-card-title>

                        <v-card-text>

                            <v-row>


                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Product Pages" clearable :items="productpages"
                                        v-model="selectedProductPages" required @input="$v.selectedProductPages.$touch()"
                                        :error-messages="selectedProductPagesErrors"
                                        @blur="$v.selectedProductPages.$touch()"></v-autocomplete>
                                </v-col>

                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Checkout Pages" clearable :items="checkoutpages"
                                        v-model="selectedCheckoutPages" required @input="$v.selectedCheckoutPages.$touch()"
                                        :error-messages="selectedCheckoutPagesErrors"
                                        @blur="$v.selectedCheckoutPages.$touch()"></v-autocomplete>
                                </v-col>


                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Contact Pages" clearable :items="contactpages"
                                        v-model="selectedContactPages" required @input="$v.selectedContactPages.$touch()"
                                        :error-messages="selectedContactPagesErrors"
                                        @blur="$v.selectedContactPages.$touch()"></v-autocomplete>
                                </v-col>

                                <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Cart Pages" clearable :items="cartpages"
                                        v-model="selectedCartPages" required @input="$v.selectedCartPages.$touch()"
                                        :error-messages="selectedCartPagesErrors"
                                        @blur="$v.selectedCartPages.$touch()"></v-autocomplete>
                                </v-col>

                                  <v-col cols="12" sm="6" md="4">

                                    <v-autocomplete label="Navigation Pages" clearable :items="navigationcartpages"
                                        v-model="selectedNavigationCartPages" required @input="$v.selectedNavigationCartPages.$touch()"
                                        :error-messages="selectedNavigationCartPagesErrors"
                                        @blur="$v.selectedNavigationCartPages.$touch()"></v-autocomplete>
                                </v-col>



                            </v-row>


                        </v-card-text>

                    </v-card>
                </v-col>





            </v-row>


        </v-card-text>



    </v-app>
</template>

<script>

import { required, requiredIf, email } from 'vuelidate/lib/validators'
import alert from '../../shared/alert'


export default {

    props: {
        headertemplates: {
            type: Array,
            required: true
        },
        herosections: {
            type: Array,
            required: true
        },
        productsections: {
            type: Array,
            required: true
        },
        aboutsections: {
            type: Array,
            required: true
        },
        contactsections: {
            type: Array,
            required: true
        },
        popularproductsections: {
            type: Array,
            required: true
        },
        ctasections: {
            type: Array,
            required: true
        },
        featuresections: {
            type: Array,
            required: true
        },
        footertemplates: {
            type: Array,
            required: true
        },
        productpages: {
            type: Array,
            required: true
        },
        checkoutpages: {
            type: Array,
            required: true
        },
        contactpages: {
            type: Array,
            required: true
        },
        cartpages: {
            type: Array,
            required: true
        },
        navigationcartpages: {
            type: Array,
            required: true
        },

        relatedproductsections: {
            type: Array,
            required: true
        },
        site_id: {
            type: Number,
            required: false
        },
        includedlayoutitems: {
            type: Array,
            required: true
        },
    },

    validations: {
        selectedHeaderTemplate: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('header')
            })
        },
        selectedHeroSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('heroSection')
            })
        },
        selectedProductSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('productSection')
            })
        },
        selectedAboutSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('aboutSection')
            })
        },
        selectedContactSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('contactSection')
            })
        },
        selectedPopularProductSection: {
            requiredif: requiredIf(function () {
                return this.includedLayoutItems.includes('popularProductsection')
            })
        },
        selectedCtaSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('ctaSection')
            })
        },
        selectedFeatureSection: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('featuresSection')
            })
        },
        selectedFooterTemplate: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('footer')
            })
        },
        selectedProductPages: {
            required
        },
        selectedCheckoutPages: {
            required
        },
        selectedContactPages: {
            required
        },
        selectedCartPages: {
            required
        },
        selectedNavigationCartPages: {
            required
        },

        selectedRelatedProductSection: {
            required
        },



    },

    data() {
        return {
            loading: false,
            selectedHeaderTemplate: null,
            selectedHeroSection: null,
            selectedProductSection: null,
            selectedAboutSection: null,
            selectedContactSection: null,
            selectedPopularProductSection: null,
            selectedCtaSection: null,
            selectedFeatureSection: null,
            selectedFooterTemplate: null,
            selectedProductPages: null,
            selectedCheckoutPages: null,
            selectedCartPages: null,
            selectedContactPages: null,
            selectedNavigationCartPages: null,
            selectedRelatedProductSection: null,
            siteId: null,
            siteContent: [],
            siteTemplateId: null,
            includedLayoutItems: [],

        }
    },

    computed: {

        selectedHeaderTemplateErrors() {
            const errors = []
            if (!this.$v.selectedHeaderTemplate.$dirty) return errors
            !this.$v.selectedHeaderTemplate.requiredIf && errors.push('Header Template is required.')
            return errors
        },
        selectedHeroSectionErrors() {
            const errors = []
            if (!this.$v.selectedHeroSection.$dirty) return errors
            !this.$v.selectedHeroSection.requiredIf && errors.push('Hero Section is required.')
            return errors
        },
        selectedProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedProductSection.$dirty) return errors
            !this.$v.selectedProductSection.requiredIf && errors.push('Product Section is required.')
            return errors
        },
        selectedAboutSectionErrors() {
            const errors = []
            if (!this.$v.selectedAboutSection.$dirty) return errors
            !this.$v.selectedAboutSection.requiredIf && errors.push('About Section is required.')
            return errors
        },
        selectedContactSectionErrors() {
            const errors = []
            if (!this.$v.selectedContactSection.$dirty) return errors
            !this.$v.selectedContactSection.requiredIf && errors.push('Contact Section is required.')
            return errors
        },
        selectedPopularProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedPopularProductSection.$dirty) return errors
            !this.$v.selectedPopularProductSection.requiredIf && errors.push('Popular Product Section is required.')
            return errors
        },
        selectedCtaSectionErrors() {
            const errors = []
            if (!this.$v.selectedCtaSection.$dirty) return errors
            !this.$v.selectedCtaSection.requiredIf && errors.push('CTA Section is required.')
            return errors
        },
        selectedFeatureSectionErrors() {
            const errors = []
            if (!this.$v.selectedFeatureSection.$dirty) return errors
            !this.$v.selectedFeatureSection.requiredIf && errors.push('Feature Section is required.')
            return errors
        },
        selectedFooterTemplateErrors() {
            const errors = []
            if (!this.$v.selectedFooterTemplate.$dirty) return errors
            !this.$v.selectedFooterTemplate.requiredIf && errors.push('Footer Template is required.')
            return errors
        },
        selectedProductPagesErrors() {
            const errors = []
            if (!this.$v.selectedProductPages.$dirty) return errors
            !this.$v.selectedProductPages.required && errors.push('Product Pages is required.')
            return errors
        },
        selectedCheckoutPagesErrors() {
            const errors = []
            if (!this.$v.selectedCheckoutPages.$dirty) return errors
            !this.$v.selectedCheckoutPages.required && errors.push('Checkout Pages is required.')
            return errors
        },
        selectedContactPagesErrors() {
            const errors = []
            if (!this.$v.selectedContactPages.$dirty) return errors
            !this.$v.selectedContactPages.required && errors.push('Contact Pages is required.')
            return errors
        },
        selectedCartPagesErrors() {
            const errors = []
            if (!this.$v.selectedCartPages.$dirty) return errors
            !this.$v.selectedCartPages.required && errors.push('Cart Pages is required.')
            return errors
        },
        selectedNavigationCartPagesErrors() {
            const errors = []
            if (!this.$v.selectedNavigationCartPages.$dirty) return errors
            !this.$v.selectedNavigationCartPages.required && errors.push('Navigation Cart Pages is required.')
            return errors
        },
        selectedRelatedProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedRelatedProductSection.$dirty) return errors
            !this.$v.selectedRelatedProductSection.required && errors.push('Related Product Section is required.')
            return errors
        },


    },



    methods: {

        randomize() {

            // Header Template
            let headerTemplate = this.headertemplates[Math.floor(Math.random() * this.headertemplates.length)];

            this.selectedHeaderTemplate = headerTemplate.value;

            // Hero Section

            if (this.includedLayoutItems.includes('heroSection')) {
                let heroSection = this.herosections[Math.floor(Math.random() * this.herosections.length)];
                this.selectedHeroSection = heroSection.value;
            }

            // Product Section
            if (this.includedLayoutItems.includes('productSection')) {
                let productSection = this.productsections[Math.floor(Math.random() * this.productsections.length)];
                this.selectedProductSection = productSection.value;
            }
            // related product section

            let relatedProductSection = this.relatedproductsections[Math.floor(Math.random() * this.relatedproductsections.length)];
            this.selectedRelatedProductSection = relatedProductSection.value;

            // About Section
            if (this.includedLayoutItems.includes('aboutSection')) {
                let aboutSection = this.aboutsections[Math.floor(Math.random() * this.aboutsections.length)];
                this.selectedAboutSection = aboutSection.value;
            }

            // Contact Section
            if (this.includedLayoutItems.includes('contactSection')) {
                let contactSection = this.contactsections[Math.floor(Math.random() * this.contactsections.length)];
                this.selectedContactSection = contactSection.value;
            }
            // Popular Product Section
            if (this.includedLayoutItems.includes('popularProductsection')) {
                let popularProductSection = this.popularproductsections[Math.floor(Math.random() * this.popularproductsections.length)];
                this.selectedPopularProductSection = popularProductSection.value;
            }

            // CTA Section
            if (this.includedLayoutItems.includes('ctaSection')) {
                let ctaSection = this.ctasections[Math.floor(Math.random() * this.ctasections.length)];
                this.selectedCtaSection = ctaSection.value;
            }

            // Feature Section
            if (this.includedLayoutItems.includes('featuresSection')) {
                let featureSection = this.featuresections[Math.floor(Math.random() * this.featuresections.length)];
                this.selectedFeatureSection = featureSection.value;
            }
            // Footer Template
            let footerTemplate = this.footertemplates[Math.floor(Math.random() * this.footertemplates.length)];
            this.selectedFooterTemplate = footerTemplate.value;

            // Product Pages
            let productPages = this.productpages[Math.floor(Math.random() * this.productpages.length)];
            this.selectedProductPages = productPages.value;

            // Checkout Pages
            let checkoutPages = this.checkoutpages[Math.floor(Math.random() * this.checkoutpages.length)];
            this.selectedCheckoutPages = checkoutPages.value;


            let contactPages = this.contactpages[Math.floor(Math.random() * this.contactpages.length)];
            this.selectedContactPages = contactPages.value;


            let cartPages = this.cartpages[Math.floor(Math.random() * this.cartpages.length)];
            this.selectedCartPages = cartPages.value;


            let navigationCartPages = this.navigationcartpages[Math.floor(Math.random() * this.navigationcartpages.length)];
            this.selectedNavigationCartPages = navigationCartPages.value;


        },

        submitSiteTemplate() {

            this.$v.$touch();


            if (this.$v.$error) {
                return;
            }

            this.loading = true;

            let formData = new FormData();

            formData.append('site_id', this.siteId);
            formData.append('header_template_id', this.selectedHeaderTemplate);
            if (this.selectedHeroSection) {
                formData.append('hero_section_id', this.selectedHeroSection);
            }
            if (this.selectedProductSection) {
                formData.append('product_section_id', this.selectedProductSection);

            }
            if (this.selectedAboutSection) {
                formData.append('about_section_id', this.selectedAboutSection);

            }

            if (this.selectedContactSection) {
                formData.append('contact_section_id', this.selectedContactSection);
            }
            if (this.selectedPopularProductSection) {
                formData.append('popular_product_section_id', this.selectedPopularProductSection);
            }
            if (this.selectedCtaSection) {
                formData.append('cta_section_id', this.selectedCtaSection);
            }
            if (this.selectedFeatureSection) {
                formData.append('feature_section_id', this.selectedFeatureSection);
            }
            if (this.selectedFooterTemplate) {
                formData.append('footer_template_id', this.selectedFooterTemplate);
            }
            if (this.selectedProductPages) {
                formData.append('product_page_id', this.selectedProductPages);
            }
            if (this.selectedCheckoutPages) {
                formData.append('checkout_page_id', this.selectedCheckoutPages);
            }
            if (this.selectedContactPages) {
                formData.append('contact_page_id', this.selectedContactPages);
            }
            if (this.selectedCartPages) {
                formData.append('cart_page_id', this.selectedCartPages);
            }
            if (this.selectedNavigationCartPages) {
                formData.append('navigation_cart_page_id', this.selectedNavigationCartPages);
            }
            if (this.selectedRelatedProductSection) {
                formData.append('related_product_section_id', this.selectedRelatedProductSection);
            }

            // add images



            axios.post('/sites/submit-site-template', formData, { headers: { 'Content-type': 'multipart/form-data' } })
                .then(response => {
                    console.log(response);
                    this.loading = false;
                    this.siteTemplateId = response.data.data.site_template_id;

                    this.showStatus(response.data.message, 'success');


                    this.$emit('templateContentSubmitted', true)

                    let aboutUsSection= this.aboutsections.find((item) => item.value == this.selectedAboutSection);

                    console.log("aboutUsSectionnnnnnnnnnnnn", aboutUsSection);

                    this.$emit('totalAboutSectionImages', aboutUsSection.total_images);

                })
                .catch(error => {
                    console.log(error);
                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error');
                });


        },


        getIncludedLayoutItems(includedLayoutItems) {
            console.log("getIncludedLayoutItems evetn hassan", includedLayoutItems);

            // pluck only the label and value from the includedLayoutItems array

            let includedLayoutItemsArray = includedLayoutItems.map((item) => item.label);

            console.log("includedLayoutItemsArray", includedLayoutItemsArray);

            this.includedLayoutItems = includedLayoutItemsArray

            // reset all fields

            if (!this.includedLayoutItems.includes('heroSection')) {
                this.selectedHeroSection = null;

            }
            if (!this.includedLayoutItems.includes('productSection')) {
                this.selectedProductSection = null;
            }
            if (!this.includedLayoutItems.includes('aboutSection')) {
                this.selectedAboutSection = null;

            }
            if (!this.includedLayoutItems.includes('contactSection')) {
                this.selectedContactSection = null;

            }
            if (!this.includedLayoutItems.includes('popularProductsection')) {
                this.selectedPopularProductSection = null;
            }
            if (!this.includedLayoutItems.includes('ctaSection')) {
                this.selectedCtaSection = null;
            }
            if (!this.includedLayoutItems.includes('featuresSection')) {
                this.selectedFeatureSection = null;
            }

        },

    },


    mounted() {
        console.log('TemplateContent.vue mounted');



        console.log('templatecontentitems', this.includedLayoutItems)
    },
    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;

        let selectedHeaderTemplate = this.headertemplates.find((item) => item.selected == true);
        if (selectedHeaderTemplate) {
            this.selectedHeaderTemplate = selectedHeaderTemplate.value;
        }


        let selectedHeroSection = this.herosections.find((item) => item.selected == true);
        if (selectedHeroSection) {
            this.selectedHeroSection = selectedHeroSection.value;
        }


        let selectedProductSection = this.productsections.find((item) => item.selected == true);
        if (this.selectedProductSection) {
            this.selectedProductSection = this.selectedProductSection.value;
        }

        let selectedAboutSection = this.aboutsections.find((item) => item.selected == true);
        if (selectedAboutSection) {
            this.selectedAboutSection = selectedAboutSection.value;
        }

        let selectedContactSection = this.contactsections.find((item) => item.selected == true);
        if (selectedContactSection) {
            this.selectedContactSection = selectedContactSection.value;
        }

        let selectedPopularProductSection = this.popularproductsections.find((item) => item.selected == true);
        if (selectedPopularProductSection) {
            this.selectedPopularProductSection = selectedPopularProductSection.value;
        }

        let selectedCtaSection = this.ctasections.find((item) => item.selected == true);
        if (selectedCtaSection) {
            this.selectedCtaSection = selectedCtaSection.value;
        }
        let selectedFeatureSection = this.featuresections.find((item) => item.selected == true);
        if (selectedFeatureSection) {
            this.selectedFeatureSection = selectedFeatureSection.value;
        }
        let selectedFooterTemplate = this.footertemplates.find((item) => item.selected == true);
        if (selectedFooterTemplate) {
            this.selectedFooterTemplate = selectedFooterTemplate.value;
        }
        let selectedProductPages = this.productpages.find((item) => item.selected == true);
        if (selectedProductPages) {
            this.selectedProductPages = selectedProductPages.value;
        }
        let selectedCheckoutPages = this.checkoutpages.find((item) => item.selected == true);
        if (selectedCheckoutPages) {
            this.selectedCheckoutPages = selectedCheckoutPages.value;
        }
        let selectedRelatedProductSection = this.relatedproductsections.find((item) => item.selected == true);
        if (selectedRelatedProductSection) {
            this.selectedRelatedProductSection = selectedRelatedProductSection.value;
        }


        console.log(this.siteId);

        this.getIncludedLayoutItems(this.includedlayoutitems);
    },
}

</script>
