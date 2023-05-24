<template>
    <v-app app>

        <v-container>

            <v-card>
                <v-tabs background-color="bg-default-darker" center-active dark v-model="tab">
                    <v-tab v-for="(tab, ind) in tabs" :key="ind"
                        :disabled="tab.label !== 'site_info' && !siteId ? true : false">
                        <v-icon small :color="tab.icon.color" class="mr-1">{{ tab.icon.icon }}</v-icon> {{ tab.text }}
                    </v-tab>
                </v-tabs>

                <v-tabs-items v-model="tab">
                    <v-tab-item v-for="(tab, i) in tabs" :key="i">
                        <v-card flat>
                            <v-card-text v-if="tab.label == 'site_info'">
                                <SiteInfo :site_id="siteId" :site_info="siteInfo" @siteIdGenerated="getSideId" />
                            </v-card-text>



                            <v-card-text v-if="tab.label == 'templates'">
                                <Template :headertemplates="headertemplates" :herosections="herosections"
                                    :productsections="productsections" :aboutsections="aboutsections"
                                    :contactsections="contactsections" :popularproductsections="popularproductsections"
                                    :ctasections="ctasections" :featuresections="featuresections"
                                    :footertemplates="footertemplates" :productpages="productpages"
                                    :checkoutpages="checkoutpages" :relatedproductsections="relatedproductsections"
                                    :layouts="layouts" :site_id="siteId" :site_content="siteContent"
                                    :aboutustitles="aboutustitles" :slogans="slogans" :shoptitles="shoptitles"
                                    :taglines="taglines" :aboutuscontent="aboutuscontent" :buttonnames="buttonnames"
                                    :populartitles="populartitles" :contacttitles="contacttitles"
                                    :contactcontent="contactcontent" :loadinggifs="loadinggifs" :colorsfonts="colorsfonts"
                                    :creditcards="creditcards" :fontfamilies="fontfamilies"
                                    @templateSubmitted="getTemplateSubmitted" @layoutSubmitted="getLayoutSubmitted"
                                    @contentSubmitted="getContentSubmitted" @loadingGifsSubmitted="getLoadingGifsSubmitted"
                                    @colorFontSubmitted="getColorFontSubmitted"
                                    @creditCardSubmitted="getCreditCardSubmitted" />
                            </v-card-text>

                            <v-card-text v-if="tab.label == 'others'">
                                <TermsOthers :site_id="siteId" :sortproductsby="sortproductsby"
                                    :totalproducts="totalproducts" @termsOthersSubmitted="getTermsOthersSubmitted" />
                            </v-card-text>


                            <v-card-text v-if="tab.label == 'crm'">
                                <CRM :site_id="siteId" :advertisingcompanies="advertisingcompanies"
                                    @crmSubmitted="getCrmSubmitted" />
                            </v-card-text>


                            <v-card-text v-if="tab.label == 'products'">
                                <Products :site_id="siteId" :advertisingcompanies="advertisingcompanies"
                                    @productsSubmitted="getProductsSubmitted" />
                            </v-card-text>


                            <v-card-text v-if="tab.label == 'generate_site'">
                                <GenerateSite :site_id="siteId" :steps-required="stepsRequired" />
                            </v-card-text>

                        </v-card>
                    </v-tab-item>
                </v-tabs-items>

            </v-card>
        </v-container>

    </v-app>
</template>

<script>

import SiteInfo from './SiteInfo'
import SiteContent from './SiteContent.vue';
import Template from './Template.vue';
import TermsOthers from './TermsOthers.vue';
import CRM from './CRM.vue';
import Products from './Products.vue';
import GenerateSite from './GenerateSite.vue';


export default {

    props: {

        site: {

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
        sortproductsby: {
            type: Array,
            required: true
        },

        advertisingcompanies: {
            type: Array,
            required: true
        },

        totalproducts: {
            type: Number,
            required: true
        },

    },

    data() {
        return {
            tab: null,
            tabs: [
                {
                    label: 'site_info',
                    text: 'Site Information',
                    // wait icon
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },
                {
                    label: 'products',
                    text: 'Products',
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },

                {
                    label: 'templates',
                    text: 'Templates',
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },
                {
                    label: 'others',
                    text: 'Others',
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },
                {
                    label: 'crm',
                    text: 'CRM',
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },
                {
                    label: 'generate_site',
                    text: 'Generate Site',
                    icon: {
                        color: '',
                        icon: 'mdi-clock-outline',
                    },
                },
            ],
            siteInfo: [],
            siteId: null,
            productsSubmitted: false,
            templateSubmitted: false,
            layoutSubmitted: false,
            contentSubmitted: false,
            loadingGifsSubmitted: false,
            colorFontsSubmitted: false,
            creditCardSubmitted: false,
            termsOthersSubmitted: false,
            crmSubmitted: false,
            siteContent: [],
            stepsRequired: [
                {
                    label: 'site_info',
                    submitted: false,
                    message: 'Please complete the site information step'
                },
                {
                    label: 'products',
                    submitted: false,
                    message: 'Please complete the products step'
                },
                {
                    label: 'templates',
                    submitted: false,
                    message: 'Please complete the template step'
                },
                {
                    label: 'layout',
                    submitted: false,
                    message: 'Please complete the layout step'
                },
                {
                    label: 'content',
                    submitted: false,
                    message: 'Please complete the content step'
                },
                {
                    label: 'loading_gifs',
                    submitted: false,
                    message: 'Please complete the loading gifs step'
                },
                {
                    label: 'color_fonts',
                    submitted: false,
                    message: 'Please complete the color and fonts step'
                },
                {
                    label: 'credit_card',
                    submitted: false,
                    message: 'Please complete the credit card step'
                },
                {
                    label: 'terms_others',
                    submitted: false,
                    message: 'Please complete the terms and others step'
                },
                {
                    label: 'crm',
                    submitted: false,
                    message: 'Please complete the crm step'
                },


            ]

        }
    },

    methods: {


        getSideId(siteId) {
            this.siteId = siteId;
            this.tab = 1;
            console.log(this.siteId);

            this.stepsRequired.forEach((step) => {
                if (step.label === 'site_info') {
                    step.submitted = true;
                    step.message = 'Site information step completed';
                }
            })

            this.tabs.forEach((tab) => {
                if (tab.label === 'site_info') {
                    tab.icon.icon = 'mdi-check-circle-outline';
                    tab.icon.color = 'green';
                }
            })

        }
        ,
        getTemplateSubmitted(templateSubmitted) {
            this.templateSubmitted = templateSubmitted;
            console.log("templateSubmitted " + this.templateSubmitted);



            this.stepsRequired.forEach((step) => {
                if (step.label === 'templates') {
                    step.submitted = true;
                    step.message = 'Template step completed';
                }
            })


        },
        getProductsSubmitted(productsSubmitted) {
            this.productsSubmitted = productsSubmitted;
            console.log("productsSubmitted " + this.productsSubmitted);


            this.tab = 2
            this.stepsRequired.forEach((step) => {
                if (step.label === 'products') {
                    step.submitted = true;
                    step.message = 'Products step completed';
                }
            })

            this.tabs.forEach((tab) => {
                if (tab.label === 'products') {
                    tab.icon.icon = 'mdi-check-circle-outline';
                    tab.icon.color = 'green';
                }
            })
        },
        getLayoutSubmitted(layoutSubmitted) {
            this.layoutSubmitted = layoutSubmitted;
            console.log("layoutSubmitted " + this.layoutSubmitted);

            this.stepsRequired.forEach((step) => {
                if (step.label === 'layout') {
                    step.submitted = true;
                    step.message = 'Layout step completed';
                }
            })

            this.tabs.forEach((tab) => {
                if (tab.label === 'layout') {
                    tab.icon.icon = 'mdi-check-circle-outline';
                    tab.icon.color = 'green';
                }
            })
        },
        getContentSubmitted(contentSubmitted) {
            this.contentSubmitted = contentSubmitted;
            console.log("contentSubmitted " + this.contentSubmitted);

            this.stepsRequired.forEach((step) => {
                if (step.label === 'content') {
                    step.submitted = true;
                    step.message = 'Content step completed';
                }
            })

        },
        getLoadingGifsSubmitted(loadingGifsSubmitted) {
            this.loadingGifsSubmitted = loadingGifsSubmitted;
            console.log("loadingGifsSubmitted " + this.loadingGifsSubmitted);

            this.stepsRequired.forEach((step) => {
                if (step.label === 'loading_gifs') {
                    step.submitted = true;
                    step.message = 'Loading gifs step completed';
                }
            })
        },
        getColorFontSubmitted(colorFontsSubmitted) {
            this.colorFontsSubmitted = colorFontsSubmitted;
            console.log("colorFontsSubmitted " + this.colorFontsSubmitted);

            this.stepsRequired.forEach((step) => {
                if (step.label === 'color_fonts') {
                    step.submitted = true;
                    step.message = 'Color and fonts step completed';
                }
            })
        },
        getCreditCardSubmitted(creditCardSubmitted) {
            this.creditCardSubmitted = creditCardSubmitted;
            console.log("creditCardSubmitted " + this.creditCardSubmitted);

            this.tab = 3

            this.stepsRequired.forEach((step) => {
                if (step.label === 'credit_card') {
                    step.submitted = true;
                    step.message = 'Credit card step completed';
                }
            })
        },
        getTermsOthersSubmitted(termsOthersSubmitted) {
            this.termsOthersSubmitted = termsOthersSubmitted;
            console.log("termsOthersSubmitted " + this.termsOthersSubmitted);

            this.tab = 4

            this.stepsRequired.forEach((step) => {
                if (step.label === 'terms_others') {
                    step.submitted = true;
                    step.message = 'Terms and others step completed';
                }
            })

            this.tabs.forEach((tab) => {
                if (tab.label === 'others') {
                    tab.icon.icon = 'mdi-check-circle-outline';
                    tab.icon.color = 'green';
                }
            })
        },
        getCrmSubmitted(crmSubmitted) {
            this.crmSubmitted = crmSubmitted;
            console.log("crmSubmitted " + this.crmSubmitted);

            this.tab = 5

            this.stepsRequired.forEach((step) => {
                if (step.label === 'crm') {
                    step.submitted = true;
                    step.message = 'Crm step completed';
                }
            })

            this.tabs.forEach((tab) => {
                if (tab.label === 'crm') {
                    tab.icon.icon = 'mdi-check-circle-outline';
                    tab.icon.color = 'green';
                }
            })
        },

        siteDownloadAble() {

            axios.post('/sites/site-downloadable', {
                site_id: this.siteId,
            })
                .then(response => {

                    console.log("site downloadbled",response);

                })
                .catch(error => {
                    console.log("site downloadbled error",error.response);
                });
        }
    },

    components: {
        SiteInfo,
        SiteContent,
        Template,
        TermsOthers,
        CRM,
        Products,
        GenerateSite
    },

    watch: {
        stepsRequired: {
            handler: function (val) {
                // if template, layout, content, loading gifs, color and fonts, credit card, are all submitted, then change the template tab to green
                if (this.templateSubmitted && this.layoutSubmitted && this.contentSubmitted && this.loadingGifsSubmitted && this.colorFontsSubmitted && this.creditCardSubmitted) {
                    this.tabs.forEach((tab) => {
                        if (tab.label === 'templates') {
                            tab.icon.icon = 'mdi-check-circle-outline';
                            tab.icon.color = 'green';
                        }
                    })
                }

                if (this.productsSubmitted && this.templateSubmitted && this.layoutSubmitted && this.contentSubmitted && this.loadingGifsSubmitted && this.colorFontsSubmitted && this.creditCardSubmitted && this.termsOthersSubmitted && this.crmSubmitted) {

                    console.log("all steps completed");
                    this.siteDownloadAble();
                }
                else {
                    console.log("not all steps completed");
                }


            },
            deep: true
        }
    },

    mounted() {

        if(this.site && this.site!=0){
            this.siteId = this.site.id;

            console.log("siteeeeeeeeeee",this.site);

            this.siteInfo.name=this.site.name;
            this.siteInfo.url=this.site.url;
            this.siteInfo.email=this.site.email;
            this.siteInfo.phone=this.site.phone_number;
            this.siteInfo.address=this.site.address;
            this.siteInfo.corp_name=this.site.corp_name;
            this.siteInfo.description=this.site.description;
            this.siteInfo.return_address=this.site.return_address;
            this.siteInfo.fulfillment=this.site.fulfillment;
            this.siteInfo.trial_period=this.site.trial_period;
            this.siteInfo.trial_period_breakdown=this.site.trial_period_breakdown;
            this.siteInfo.shipping_period=this.site.shipping_period;
            this.siteInfo.shipping_carrier=this.site.shipping_carrier;
            this.siteInfo.style_sheet=this.site.style_sheet;
            this.siteInfo.customer_service_hours=this.site.customer_service_hours;
            this.siteInfo.maximum_ticket_value=this.site.maximum_ticket_value;

        }

    }
}
</script>
