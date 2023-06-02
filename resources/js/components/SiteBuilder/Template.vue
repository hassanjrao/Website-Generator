<template>
    <v-app app>


        <!-- header -->
        <v-card-title>

            <v-row class="justify-content-around align-items-center">



                <v-col cols="12" sm="12" md="12">
                    <v-tabs center-active v-model="tab">

                        <v-tab v-for="(tab, ind) in tabs" :key="ind">
                            {{ tab.text }}
                        </v-tab>


                    </v-tabs>
                </v-col>


                <v-col cols="12" sm="12" md="12" class="text-right">

                <v-btn color="secondary" :loading="loading" class="mr-2" @click="randomizeAllMethod">Randomize All</v-btn>
                </v-col>


            </v-row>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>
        <!-- body -->
        <v-card-text>

            <v-tabs-items v-model="tab">
                <v-tab-item v-for="(tab, i) in tabs" :key="i">
                    <v-card flat v-if="tab.label == 'template'">

                        <TemplateContent ref="templateContent" :key="templateContentKey" :headertemplates="headertemplates"
                            :herosections="herosections" :productsections="productsections"
                            :relatedproductsections="relatedproductsections" :aboutsections="aboutsections"
                            :contactsections="contactsections" :popularproductsections="popularproductsections"
                            :ctasections="ctasections" :featuresections="featuresections" :footertemplates="footertemplates"
                            :site_id="siteId" :productpages="productpages" :checkoutpages="checkoutpages"
                            :contactpages="contactpages" :cartpages="cartpages" :navigationcartpages="navigationcartpages"
                            :includedlayoutitems="includedLayoutItems"
                            @templateContentSubmitted="getTemplateContentSubmitted">
                        </TemplateContent>
                    </v-card>

                    <v-card tile v-if="tab.label == 'template_images'">

                        <TemplateImages :key="templateImagesKey" :site_id="siteId"
                            :includedlayoutitems="includedLayoutItems"
                            @templateImagesSubmitted="getTemplateImagesSubmitted">

                        </TemplateImages>

                    </v-card>

                    <v-card tile v-if="tab.label == 'layout'">

                        <Layout ref="layout" :layouts="layouts" :site_id="siteId" @layoutSubmitted="getLayoutSubmitted"
                            @includedLayoutItems="getIncludedLayoutItems" :randomize-all="randomizeAll" />

                    </v-card>


                    <v-card tile v-if="tab.label == 'content'">

                        <SiteContent ref="siteContent" :site_content="siteContent" :slogans="slogans" :taglines="taglines"
                            :aboutustitles="aboutustitles" :aboutuscontent="aboutuscontent" :shoptitles="shoptitles"
                            :buttonnames="buttonnames" :populartitles="populartitles" :contacttitles="contacttitles"
                            :contactcontent="contactcontent" :site_id="siteId" @contentSubmitted="getContentSubmitted"
                            :randomize-all="randomizeAll" />


                    </v-card>


                    <v-card tile v-if="tab.label == 'loading_gifs'">
                        <LoadingGifs ref="loadingGifs" :site_id="siteId" :loadinggifs="loadinggifs"
                            @loadingGifsSubmitted="getLoadingGifsSubmitted" />
                    </v-card>


                    <v-card tile v-if="tab.label == 'colors_fonts'">
                        <ColorsFonts ref="colorsFonts" :site_id="siteId" :colorsfonts="colorsfonts"
                            :fontfamilies="fontfamilies" @colorFontSubmitted="getColorFontSubmitted" />
                    </v-card>


                    <v-card tile v-if="tab.label == 'credit_cards'">
                        <CreditCards ref="creditCards" :site_id="siteId" :creditcards="creditcards"
                            @creditCardSubmitted="getCreditCardSubmitted" />
                    </v-card>



                </v-tab-item>

            </v-tabs-items>



        </v-card-text>


    </v-app>
</template>

<script>

import { required, requiredIf } from 'vuelidate/lib/validators'
import alert from '../../shared/alert'
import Layout from './Layout.vue'
import SiteContent from './SiteContent.vue'
import LoadingGifs from './LoadingGifs.vue'
import ColorsFonts from './ColorsFonts.vue'
import CreditCards from './CreditCards.vue'
import TemplateContent from './TemplateContent.vue'
import TemplateImages from './TemplateImages.vue'



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
            required: true,
        },
        cartpages: {
            type: Array,
            required: true,
        },
        navigationcartpages: {
            type: Array,
            required: true,
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

    data() {
        return {
            randomizeAll: 0,
            siteContentKey: 'siteContentKey',
            templateImagesKey: 'templateImagesKey',
            templateContentKey: 'templateContentKey',
            selectedHeaderTemplate: null,
            selectedHeroSection: null,
            heroSectionBgImage: null,
            heroSectionProductImage: null,
            heroSectionBgImage: null,
            selectedProductSection: null,
            productSectionBgImage: null,
            selectedAboutSection: null,
            aboutSectionBgImage: null,
            selectedContactSection: null,
            contactSectionBgImage: null,
            selectedPopularProductSection: null,
            selectedCtaSection: null,
            ctaSectionBgImage: null,
            selectedFeatureSection: null,
            selectedFooterTemplate: null,
            selectedProductPages: null,
            selectedCheckoutPages: null,
            selectedRelatedProductSection: null,
            siteId: null,
            siteContent: [],
            tabs: [
                {
                    label: 'layout',
                    text: 'Layout'
                },
                {
                    label: 'template',
                    text: 'Template',

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
                },
                {
                    label: 'template_images',
                    text: 'Template Images'
                }
            ],
            tab: 0,
            loading: false,
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
        selectedRelatedProductSectionErrors() {
            const errors = []
            if (!this.$v.selectedRelatedProductSection.$dirty) return errors
            !this.$v.selectedRelatedProductSection.required && errors.push('Related Product Section is required.')
            return errors
        },
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

        visitAllTabs(time) {
            return new Promise(resolve => setTimeout(() => {

            }, 4000))
        },

         randomizeAllMethod() {

            // loop wac



            let refs = [
                {
                    'name': 'layout',
                    'submit': 'submitPageLayout'
                },
                {
                    'name': 'templateContent',
                    'submit': 'submitSiteTemplate'
                }
                ,
                {
                    'name': 'siteContent',
                    'submit': 'submitSiteContent'

                },
                {
                    'name': 'loadingGifs',
                    'submit': 'submitSiteLoadingGif'

                }
                ,
                {
                    'name': 'colorsFonts',
                    'submit': 'submitSiteColorFont'
                }
                ,
                {
                    'name': 'creditCards',
                    'submit': 'submitCreditCards'
                }
            ];

            this.loading = true;

            this.tabs.forEach((tab, index) => {

                setTimeout(() => {
                    this.tab = index;

                    setTimeout(() => {
                        let ref = refs[index];
                        let methodName = ref['submit'];
                        let component = this.$refs[ref['name']][0];

                        console.log("component", component)
                        component.randomize();

                        component[methodName]();

                        // this.$refs[refs[index]['name']][0].randomize()
                        // this.$refs[refs[index]['name']][0].refs[index]['submit']()
                    }, 2000)
                    //


                }, 1500 * index)

            });

            setTimeout(() => {
                console.log('hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
                this.loading = false;
            }, 1500 * this.tabs.length)

        }

        ,



        getLayoutSubmitted(layoutSubmitted) {
            this.$emit('layoutSubmitted', layoutSubmitted)
            this.tab = 1
        },

        getTemplateContentSubmitted(templateContentSubmitted) {
            this.$emit('templateContentSubmitted', templateContentSubmitted)
            this.tab = 2
        },
        getTemplateImagesSubmitted(templateImagesSubmitted) {
            this.$emit('templateImagesSubmitted', templateImagesSubmitted)
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
            this.tab = 6

        },

        getIncludedLayoutItems(includedLayoutItems) {
            this.includedLayoutItems = includedLayoutItems

            this.templateContentKey = 'templateContentKey' + Math.random();
            this.templateImagesKey = 'templateImagesKey' + Math.random();

            console.log('getIncludedLayoutItems    event+', includedLayoutItems);

            //    this.$refs.templateContent.includedLayoutItems = includedLayoutItems;
        },





    },
    mounted() {
        console.log('Template.vue mounted');
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
    },
    components: {
        Layout,
        TemplateContent,
        SiteContent,
        LoadingGifs,
        ColorsFonts,
        CreditCards,
        TemplateImages
    },
}

</script>
