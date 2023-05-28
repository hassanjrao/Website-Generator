<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Template Images</h6>


            <v-btn color="primary" :loading="loading" @click="submitSiteTemplateImages">Submit</v-btn>

        </v-card-title>


        <!-- divider -->

        <v-divider></v-divider>

        <!-- body -->
        <v-card-text>

            <v-row>

                <v-col cols="12" sm="12" md="12">

                    <v-card>

                        <v-card-title>
                            <h3 class="headline mb-0">Section Images</h3>
                        </v-card-title>

                        <v-card-text>

                            <v-row>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('productSection')">

                                    <v-file-input label="Product Section BG Image" show-size truncate-length="15" required
                                        v-model="productSectionBgImage" @input="$v.productSectionBgImage.$touch()"
                                        :error-messages="productSectionBgImageErrors"
                                        @blur="$v.productSectionBgImage.$touch()">
                                    </v-file-input>
                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('popularProductsection')">

                                    <v-file-input label="Popular Product Section Image" show-size truncate-length="15"
                                        required v-model="popularProductsectionImage"
                                        @input="$v.popularProductsectionImage.$touch()"
                                        :error-messages="popularProductsectionImageErrors"
                                        @blur="$v.popularProductsectionImage.$touch()">
                                    </v-file-input>
                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('relatedProductsection')">

                                    <v-file-input label="Related Product Section Image" show-size truncate-length="15"
                                        required v-model="relatedProductsectionImage"
                                        @input="$v.relatedProductsectionImage.$touch()"
                                        :error-messages="relatedProductsectionImageErrors"
                                        @blur="$v.relatedProductsectionImage.$touch()">
                                    </v-file-input>
                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('ctaSection')">
                                    <v-file-input label="CTA Section BG Image" show-size truncate-length="15" required
                                        v-model="ctaSectionBgImage" @input="$v.ctaSectionBgImage.$touch()"
                                        :error-messages="ctaSectionBgImageErrors" @blur="$v.ctaSectionBgImage.$touch()">
                                    </v-file-input>

                                </v-col>


                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('contactSection')">
                                    <v-file-input label="Contact Section BG Image" show-size truncate-length="15" required
                                        v-model="contactSectionBgImage" @input="$v.contactSectionBgImage.$touch()"
                                        :error-messages="contactSectionBgImageErrors"
                                        @blur="$v.contactSectionBgImage.$touch()">
                                    </v-file-input>

                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('aboutSection')">
                                    <v-file-input label="About Section BG Image" show-size truncate-length="15" required
                                        v-model="aboutSectionBgImage" @input="$v.aboutSectionBgImage.$touch()"
                                        :error-messages="aboutSectionBgImageErrors" @blur="$v.aboutSectionBgImage.$touch()">
                                    </v-file-input>

                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('heroSection')">

                                    <v-file-input label="Hero Section BG Image" show-size truncate-length="15" required
                                        v-model="heroSectionBgImage" @input="$v.heroSectionBgImage.$touch()"
                                        :error-messages="heroSectionBgImageErrors"
                                        @blur="$v.heroSectionBgImage.$touch()"></v-file-input>
                                </v-col>

                                <v-col cols="12" sm="6" md="4" v-if="includedLayoutItems.includes('heroSection')">

                                    <v-file-input label="Hero Section Product Image" show-size truncate-length="15" required
                                        v-model="heroSectionProductImage" @input="$v.heroSectionProductImage.$touch()"
                                        :error-messages="heroSectionProductImageErrors"
                                        @blur="$v.heroSectionProductImage.$touch()"></v-file-input>
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

        site_id: {
            type: Number,
            required: true
        },
        includedlayoutitems: {
            type: Array,
            required: true
        },

    },

    validations: {
        heroSectionBgImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('heroSection')
            })
        },
        heroSectionProductImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('heroSection')
            })
        },
        productSectionBgImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('productSection')
            })
        },
        popularProductsectionImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('popularProductsection')
            })
        },
        relatedProductsectionImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('relatedProductsection')
            })
        },
        aboutSectionBgImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('aboutSection')
            })
        },
        contactSectionBgImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('contactSection')
            })
        },
        ctaSectionBgImage: {
            requiredIf: requiredIf(function () {
                return this.includedLayoutItems.includes('ctaSection')
            })
        },

    },

    data() {
        return {
            loading: false,
            heroSectionBgImage: null,
            heroSectionProductImage: null,
            heroSectionBgImage: null,
            productSectionBgImage: null,
            popularProductsectionImage: null,
            relatedProductsectionImage: null,
            aboutSectionBgImage: null,
            contactSectionBgImage: null,
            ctaSectionBgImage: null,
            siteId: null,
            siteTemplateId: null,
            includedLayoutItems: [],

        }
    },

    computed: {


        heroSectionBgImageErrors() {
            const errors = []
            if (!this.$v.heroSectionBgImage.$dirty) return errors
            !this.$v.heroSectionBgImage.requiredIf && errors.push('Hero Section Background Image is required.')
            return errors
        },
        heroSectionProductImageErrors() {
            const errors = []
            if (!this.$v.heroSectionProductImage.$dirty) return errors
            !this.$v.heroSectionProductImage.requiredIf && errors.push('Hero Section Product Image is required.')
            return errors
        },
        productSectionBgImageErrors() {
            const errors = []
            if (!this.$v.productSectionBgImage.$dirty) return errors
            !this.$v.productSectionBgImage.requiredIf && errors.push('Product Section Background Image is required.')
            return errors
        },
        popularProductsectionImageErrors() {
            const errors = []
            if (!this.$v.popularProductsectionImage.$dirty) return errors
            !this.$v.popularProductsectionImage.requiredIf && errors.push('Popular Product Section Image is required.')
            return errors
        },
        relatedProductsectionImageErrors() {
            const errors = []
            if (!this.$v.relatedProductsectionImage.$dirty) return errors
            !this.$v.relatedProductsectionImage.requiredIf && errors.push('Related Product Section Image is required.')
            return errors
        },
        aboutSectionBgImageErrors() {
            const errors = []
            if (!this.$v.aboutSectionBgImage.$dirty) return errors
            !this.$v.aboutSectionBgImage.requiredIf && errors.push('About Section Background Image is required.')
            return errors
        },
        contactSectionBgImageErrors() {
            const errors = []
            if (!this.$v.contactSectionBgImage.$dirty) return errors
            !this.$v.contactSectionBgImage.requiredIf && errors.push('Contact Section Background Image is required.')
            return errors
        },
        ctaSectionBgImageErrors() {
            const errors = []
            if (!this.$v.ctaSectionBgImage.$dirty) return errors
            !this.$v.ctaSectionBgImage.requiredIf && errors.push('CTA Section Background Image is required.')
            return errors
        },


    },



    methods: {


        submitSiteTemplateImages() {

            this.$v.$touch();


            if (this.$v.$error) {
                return;
            }

            this.loading = true;

            let formData = new FormData();

            formData.append('site_id', this.siteId);


            if (this.heroSectionBgImage) {
                formData.append('hero_section_bg_image', this.heroSectionBgImage);
            }
            if (this.heroSectionProductImage) {
                formData.append('hero_section_product_image', this.heroSectionProductImage);
            }
            if (this.productSectionBgImage) {
                formData.append('product_section_bg_image', this.productSectionBgImage);
            }
            if (this.popularProductsectionImage) {
                formData.append('popular_product_section_bg_image', this.popularProductsectionImage);
            }
            if (this.relatedProductsectionImage) {
                formData.append('related_product_section_bg_image', this.relatedProductsectionImage);
            }
            if (this.aboutSectionBgImage) {
                formData.append('about_section_bg_image', this.aboutSectionBgImage);
            }
            if (this.contactSectionBgImage) {
                formData.append('contact_section_bg_image', this.contactSectionBgImage);
            }
            if (this.ctaSectionBgImage) {
                formData.append('cta_section_bg_image', this.ctaSectionBgImage);
            }

            axios.post('/sites/submit-site-template-images', formData, { headers: { 'Content-type': 'multipart/form-data' } })
                .then(response => {
                    console.log(response);
                    this.loading = false;
                    this.showStatus(response.data.message, 'success');

                    this.$emit('templateImagesSubmitted', true)

                })
                .catch(error => {
                    console.log(error);
                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error');
                });


        },


        getIncludedLayoutItems(includedLayoutItems) {
            console.log("getIncludedLayoutItems images", includedLayoutItems);

            // pluck only the label and value from the includedLayoutItems array

            let includedLayoutItemsArray = includedLayoutItems.map((item) => item.label);

            console.log("includedLayoutItemsArray", includedLayoutItemsArray);

            this.includedLayoutItems = includedLayoutItemsArray

            // this.includedLayoutItems.push('relatedProductsection');
            this.includedLayoutItems.pop('popularProductsection');
            this.includedLayoutItems.pop('relatedProductsection');


            // reset all fields

            if (!this.includedLayoutItems.includes('heroSection')) {
                this.selectedHeroSection = null;
                this.heroSectionBgImage = null;
            }
            if (!this.includedLayoutItems.includes('productSection')) {
                this.selectedProductSection = null;
                this.productSectionBgImage = null;
            }
            if (!this.includedLayoutItems.includes('aboutSection')) {
                this.selectedAboutSection = null;
                this.aboutSectionBgImage = null;
            }
            if (!this.includedLayoutItems.includes('contactSection')) {
                this.selectedContactSection = null;
                this.contactSectionBgImage = null;
            }
            if (!this.includedLayoutItems.includes('popularProductsection')) {
                this.selectedPopularProductSection = null;
            }
            if (!this.includedLayoutItems.includes('relatedProductsection')) {
                this.selectedRelatedProductSection = null;
            }
            if (!this.includedLayoutItems.includes('ctaSection')) {
                this.selectedCtaSection = null;
                this.ctaSectionBgImage = null;
            }
            if (!this.includedLayoutItems.includes('featuresSection')) {
                this.selectedFeatureSection = null;
            }

        },

    },
    mounted() {
        console.log('TemplateContent.vue mounted');


    },
    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;

        console.log(this.siteId);
        this.getIncludedLayoutItems(this.includedlayoutitems);
    },
}

</script>
