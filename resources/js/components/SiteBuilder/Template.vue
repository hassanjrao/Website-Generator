<template>
    <v-app app>


        <!-- header -->
        <v-card-title>

            <v-tabs center-active v-model="tab">

                <v-tab v-for="(tab, ind) in tabs" :key="ind">
                    {{ tab.text }}
                </v-tab>

            </v-tabs>



        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>
        <!-- body -->
        <v-card-text>

            <v-tabs-items v-model="tab">
                <v-tab-item v-for="(tab, i) in tabs" :key="i">
                    <v-card flat v-if="tab.label == 'template'">


                        <v-card-title class="d-flex justify-content-between">
                            <h6 class="headline mb-0">Template</h6>

                            <div class="d-flex justify-content-center">
                                <v-btn color="secondary" class="mr-2" @click="randomize">Randomize</v-btn>

                                <v-btn color="primary" :loading="loading" @click="submitSiteTemplate">Submit</v-btn>
                            </div>

                        </v-card-title>

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


                                                    <v-autocomplete label="Header Template" clearable
                                                        :items="headertemplates" v-model="selectedHeaderTemplate" required
                                                        @input="$v.selectedHeaderTemplate.$touch()"
                                                        :error-messages="selectedHeaderTemplateErrors"
                                                        @blur="$v.selectedHeaderTemplate.$touch()"></v-autocomplete>

                                                </v-col>

                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Hero Section" clearable :items="herosections"
                                                        v-model="selectedHeroSection" required
                                                        @input="$v.selectedHeroSection.$touch()"
                                                        :error-messages="selectedHeroSectionErrors"
                                                        @blur="$v.selectedHeroSection.$touch()"></v-autocomplete>
                                                </v-col>

                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Product Section" clearable
                                                        :items="productsections" v-model="selectedProductSection" required
                                                        @input="$v.selectedProductSection.$touch()"
                                                        :error-messages="selectedProductSectionErrors"
                                                        @blur="$v.selectedProductSection.$touch()"></v-autocomplete>
                                                </v-col>

                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Related Product Section" clearable
                                                        :items="relatedproductsections"
                                                        v-model="selectedRelatedProductSection" required
                                                        @input="$v.selectedRelatedProductSection.$touch()"
                                                        :error-messages="selectedRelatedProductSectionErrors"
                                                        @blur="$v.selectedRelatedProductSection.$touch()"></v-autocomplete>
                                                </v-col>

                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="About Section" clearable :items="aboutsections"
                                                        v-model="selectedAboutSection" required
                                                        @input="$v.selectedAboutSection.$touch()"
                                                        :error-messages="selectedAboutSectionErrors"
                                                        @blur="$v.selectedAboutSection.$touch()"></v-autocomplete>
                                                </v-col>


                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Contact Section" clearable
                                                        :items="contactsections" v-model="selectedContactSection" required
                                                        @input="$v.selectedContactSection.$touch()"
                                                        :error-messages="selectedContactSectionErrors"
                                                        @blur="$v.selectedContactSection.$touch()"></v-autocomplete>
                                                </v-col>



                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Popular Product Section" clearable
                                                        :items="popularproductsections"
                                                        v-model="selectedPopularProductSection" required
                                                        @input="$v.selectedPopularProductSection.$touch()"
                                                        :error-messages="selectedPopularProductSectionErrors"
                                                        @blur="$v.selectedPopularProductSection.$touch()"></v-autocomplete>
                                                </v-col>


                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="CTA Section" clearable :items="ctasections"
                                                        v-model="selectedCtaSection" required
                                                        @input="$v.selectedCtaSection.$touch()"
                                                        :error-messages="selectedCtaSectionErrors"
                                                        @blur="$v.selectedCtaSection.$touch()"></v-autocomplete>
                                                </v-col>

                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Feature Section" clearable
                                                        :items="featuresections" v-model="selectedFeatureSection" required
                                                        @input="$v.selectedFeatureSection.$touch()"
                                                        :error-messages="selectedFeatureSectionErrors"
                                                        @blur="$v.selectedFeatureSection.$touch()"></v-autocomplete>
                                                </v-col>



                                                <v-col cols="12" sm="6" md="4">

                                                    <v-autocomplete label="Footer Template" clearable
                                                        :items="footertemplates" v-model="selectedFooterTemplate" required
                                                        @input="$v.selectedFooterTemplate.$touch()"
                                                        :error-messages="selectedFooterTemplateErrors"
                                                        @blur="$v.selectedFooterTemplate.$touch()"></v-autocomplete>
                                                </v-col>




                                            </v-row>


                                        </v-card-text>

                                    </v-card>
                                </v-col>


                                <v-col cols="12" sm="12" md="6">

                                    <v-card>

                                        <v-card-title>
                                            <h3 class="headline mb-0">Product Page</h3>
                                        </v-card-title>

                                        <v-card-text>

                                            <v-row>


                                                <v-col cols="12" sm="12" md="12">

                                                    <v-autocomplete label="Product Pages" clearable :items="productpages"
                                                        v-model="selectedProductPages" required
                                                        @input="$v.selectedProductPages.$touch()"
                                                        :error-messages="selectedProductPagesErrors"
                                                        @blur="$v.selectedProductPages.$touch()"></v-autocomplete>
                                                </v-col>

                                            </v-row>


                                        </v-card-text>

                                    </v-card>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">

                                    <v-card>

                                        <v-card-title>
                                            <h3 class="headline mb-0">Checkout Page</h3>
                                        </v-card-title>

                                        <v-card-text>

                                            <v-row>



                                                <v-col cols="12" sm="12" md="12">

                                                    <v-autocomplete label="Checkout Pages" clearable :items="checkoutpages"
                                                        v-model="selectedCheckoutPages" required
                                                        @input="$v.selectedCheckoutPages.$touch()"
                                                        :error-messages="selectedCheckoutPagesErrors"
                                                        @blur="$v.selectedCheckoutPages.$touch()"></v-autocomplete>
                                                </v-col>


                                            </v-row>


                                        </v-card-text>

                                    </v-card>
                                </v-col>

                            </v-row>


                        </v-card-text>

                    </v-card>

                    <v-card tile v-if="tab.label == 'layout'">

                        <Layout :layouts="layouts" :site_id="siteId" @layoutSubmitted="getLayoutSubmitted" />

                    </v-card>


                    <v-card tile v-if="tab.label == 'content'">

                        <SiteContent :site_content="siteContent" :slogans="slogans" :taglines="taglines"
                            :aboutustitles="aboutustitles" :aboutuscontent="aboutuscontent" :shoptitles="shoptitles"
                            :buttonnames="buttonnames" :populartitles="populartitles" :contacttitles="contacttitles"
                            :contactcontent="contactcontent" :site_id="siteId" @contentSubmitted="getContentSubmitted" />
                        />

                    </v-card>


                    <v-card tile v-if="tab.label == 'loading_gifs'">
                        <LoadingGifs :site_id="siteId" :loadinggifs="loadinggifs"
                            @loadingGifsSubmitted="getLoadingGifsSubmitted" />
                    </v-card>


                    <v-card tile v-if="tab.label == 'colors_fonts'">
                        <ColorsFonts :site_id="siteId" :colorsfonts="colorsfonts" :fontfamilies="fontfamilies"
                            @colorFontSubmitted="getColorFontSubmitted" />
                    </v-card>


                    <v-card tile v-if="tab.label == 'credit_cards'">
                        <CreditCards :site_id="siteId" :creditcards="creditcards"
                            @creditCardSubmitted="getCreditCardSubmitted" />
                    </v-card>



                </v-tab-item>

            </v-tabs-items>



        </v-card-text>


    </v-app>
</template>

<script>

import { required } from 'vuelidate/lib/validators'
import alert from '../../shared/alert'
import Layout from './Layout.vue'
import SiteContent from './SiteContent.vue'
import LoadingGifs from './LoadingGifs.vue'
import ColorsFonts from './ColorsFonts.vue'
import CreditCards from './CreditCards.vue'


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
        relatedproductsections: {
            type: Array,
            required: true
        },
        layouts: {
            type: Array,
            required: true
        },
        site_id: {
            type: Number,
            required: true
        },
        site_content: {
            type: Array,
            required: true
        },
        slogans: {
            type: Array,
            required: true
        },
        taglines: {
            type: Array,
            required: true
        },
        aboutustitles: {
            type: Array,
            required: true
        },
        aboutuscontent: {
            type: Array,
            required: true
        },
        shoptitles: {
            type: Array,
            required: true
        },
        buttonnames: {
            type: Array,
            required: true
        },
        populartitles: {
            type: Array,
            required: true
        },
        contacttitles: {
            type: Array,
            required: true
        },
        contactcontent: {
            type: Array,
            required: true
        },
        loadinggifs: {
            type: Array,
            required: true
        },
        colorsfonts: {
            type: Array,
            required: true
        },
        fontfamilies: {
            type: Array,
            required: true
        },
        creditcards: {
            type: Array,
            required: true
        },
    },
    validations: {
        selectedHeaderTemplate: {
            required
        },
        selectedHeroSection: {
            required
        },
        selectedProductSection: {
            required
        },
        selectedAboutSection: {
            required
        },
        selectedContactSection: {
            required
        },
        selectedPopularProductSection: {
            required
        },
        selectedCtaSection: {
            required
        },
        selectedFeatureSection: {
            required
        },
        selectedFooterTemplate: {
            required
        },
        selectedProductPages: {
            required
        },
        selectedCheckoutPages: {
            required
        },
        selectedRelatedProductSection: {
            required
        },
    },

    data() {
        return {
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
            selectedRelatedProductSection: null,
            siteId: null,
            siteContent: [],
            tabs: [
                {
                    label: 'template',
                    text: 'Template',

                },
                {
                    label: 'layout',
                    text: 'Layout'
                },
                {
                    label: 'content',
                    text: 'Content'
                },
                {
                    label: 'loading_gifs',
                    text: 'Loading Gifs'
                },
                {
                    label: 'colors_fonts',
                    text: 'Colors & Fonts'
                },
                {
                    label: 'credit_cards',
                    text: 'Credit Cards'
                }
            ],
            tab: 'template',
            loading: false,
            siteTemplateId: null,
        }
    },
    computed: {

        selectedHeaderTemplateErrors() {
            const errors = []
            if (!this.$v.selectedHeaderTemplate.$dirty) return errors
            !this.$v.selectedHeaderTemplate.required && errors.push('Header Template is required.')
            return errors
        },
        selectedHeroSectionErrors() {
            const errors = []
            if (!this.$v.selectedHeroSection.$dirty) return errors
            !this.$v.selectedHeroSection.required && errors.push('Hero Section is required.')
            return errors
        },
        selectedProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedProductSection.$dirty) return errors
            !this.$v.selectedProductSection.required && errors.push('Product Section is required.')
            return errors
        },
        selectedAboutSectionErrors() {
            const errors = []
            if (!this.$v.selectedAboutSection.$dirty) return errors
            !this.$v.selectedAboutSection.required && errors.push('About Section is required.')
            return errors
        },
        selectedContactSectionErrors() {
            const errors = []
            if (!this.$v.selectedContactSection.$dirty) return errors
            !this.$v.selectedContactSection.required && errors.push('Contact Section is required.')
            return errors
        },
        selectedPopularProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedPopularProductSection.$dirty) return errors
            !this.$v.selectedPopularProductSection.required && errors.push('Popular Product Section is required.')
            return errors
        },
        selectedCtaSectionErrors() {
            const errors = []
            if (!this.$v.selectedCtaSection.$dirty) return errors
            !this.$v.selectedCtaSection.required && errors.push('CTA Section is required.')
            return errors
        },
        selectedFeatureSectionErrors() {
            const errors = []
            if (!this.$v.selectedFeatureSection.$dirty) return errors
            !this.$v.selectedFeatureSection.required && errors.push('Feature Section is required.')
            return errors
        },
        selectedFooterTemplateErrors() {
            const errors = []
            if (!this.$v.selectedFooterTemplate.$dirty) return errors
            !this.$v.selectedFooterTemplate.required && errors.push('Footer Template is required.')
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
            let heroSection = this.herosections[Math.floor(Math.random() * this.herosections.length)];
            this.selectedHeroSection = heroSection.value;

            // Product Section
            let productSection = this.productsections[Math.floor(Math.random() * this.productsections.length)];
            this.selectedProductSection = productSection.value;

            // related product section
            let relatedProductSection = this.relatedproductsections[Math.floor(Math.random() * this.relatedproductsections.length)];
            this.selectedRelatedProductSection = relatedProductSection.value;

            // About Section
            let aboutSection = this.aboutsections[Math.floor(Math.random() * this.aboutsections.length)];
            this.selectedAboutSection = aboutSection.value;

            // Contact Section
            let contactSection = this.contactsections[Math.floor(Math.random() * this.contactsections.length)];
            this.selectedContactSection = contactSection.value;

            // Popular Product Section
            let popularProductSection = this.popularproductsections[Math.floor(Math.random() * this.popularproductsections.length)];
            this.selectedPopularProductSection = popularProductSection.value;

            // CTA Section
            let ctaSection = this.ctasections[Math.floor(Math.random() * this.ctasections.length)];
            this.selectedCtaSection = ctaSection.value;

            // Feature Section
            let featureSection = this.featuresections[Math.floor(Math.random() * this.featuresections.length)];
            this.selectedFeatureSection = featureSection.value;

            // Footer Template
            let footerTemplate = this.footertemplates[Math.floor(Math.random() * this.footertemplates.length)];
            this.selectedFooterTemplate = footerTemplate.value;

            // Product Pages
            let productPages = this.productpages[Math.floor(Math.random() * this.productpages.length)];
            this.selectedProductPages = productPages.value;

            // Checkout Pages
            let checkoutPages = this.checkoutpages[Math.floor(Math.random() * this.checkoutpages.length)];
            this.selectedCheckoutPages = checkoutPages.value;

        },

        submitSiteTemplate() {

            this.$v.$touch();


            if (this.$v.$error) {
                return;
            }

            this.loading = true;

            axios.post('/sites/submit-site-template', {
                site_id: this.siteId,
                header_template_id: this.selectedHeaderTemplate,
                hero_section_id: this.selectedHeroSection,
                product_section_id: this.selectedProductSection,
                about_section_id: this.selectedAboutSection,
                contact_section_id: this.selectedContactSection,
                popular_product_section_id: this.selectedPopularProductSection,
                cta_section_id: this.selectedCtaSection,
                feature_section_id: this.selectedFeatureSection,
                footer_template_id: this.selectedFooterTemplate,
                product_page_id: this.selectedProductPages,
                checkout_page_id: this.selectedCheckoutPages,
                related_product_section_id: this.selectedRelatedProductSection,

            })
                .then(response => {
                    console.log(response);
                    this.loading = false;
                    this.siteTemplateId = response.data.data.site_template_id;

                    this.showStatus(response.data.message, 'success');


                    this.$emit('templateSubmitted', true)

                    this.tab = 1
                })
                .catch(error => {
                    console.log(error);
                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error');
                });


        },

        getLayoutSubmitted(layoutSubmitted) {
            this.$emit('layoutSubmitted', layoutSubmitted)
            this.tab = 2
        },

        getContentSubmitted(contentSubmitted) {
            this.$emit('contentSubmitted', contentSubmitted)
            this.tab = 3
        },

        getLoadingGifsSubmitted(loadingGifsSubmitted) {
            this.$emit('loadingGifsSubmitted', loadingGifsSubmitted)
            this.tab = 4
        },

        getColorFontSubmitted(colorFontSubmitted) {
            this.$emit('colorFontSubmitted', colorFontSubmitted)
            this.tab = 5
        },

        getCreditCardSubmitted(creditCardSubmitted) {
            this.$emit('creditCardSubmitted', creditCardSubmitted)

        },






    },
    mounted() {
        console.log('Template.vue mounted');
    },
    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;

        console.log(this.siteId);
    },
    components: {
        Layout,
        SiteContent,
        LoadingGifs,
        ColorsFonts,
        CreditCards
    },
}

</script>
