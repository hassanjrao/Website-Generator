<template>
    <v-app app>

        <v-container>

            <v-card>
                <v-tabs background-color="deep-grey accent-4" center-active dark v-model="tab">
                    <v-tab v-for="(tab, ind) in tabs" :key="ind"
                        :disabled="tab.label !== 'site_info' && !siteId ? true : false">
                        {{ tab.text }}
                    </v-tab>
                </v-tabs>

                <v-tabs-items v-model="tab">
                    <v-tab-item v-for="(tab, i) in tabs" :key="i">
                        <v-card flat>
                            <v-card-text v-if="tab.label == 'site_info'">
                                <SiteInfo :site_info="siteInfo" @siteIdGenerated="getSideId" />
                            </v-card-text>


                            <v-card-text v-if="tab.label == 'content'">
                                <SiteContent :site_content="siteContent" :slogans="slogans" :taglines="taglines"
                                    :aboutustitles="aboutustitles" :aboutuscontent="aboutuscontent" :shoptitles="shoptitles"
                                    :buttonnames="buttonnames" :populartitles="populartitles" :contacttitles="contacttitles"
                                    :contactcontent="contactcontent" :site_id="siteId" />
                            </v-card-text>

                            <v-card-text v-if="tab.label == 'templates'">
                                <Template :headertemplates="headertemplates" :herosections="herosections" :productsections="productsections" :aboutsections="aboutsections" :contactsections="contactsections"  />
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

export default {

    props: {
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

    },

    data() {
        return {
            tab: null,
            tabs: [
                {
                    label: 'site_info',
                    text: 'Site Information',
                },
                {
                    label: 'products',
                    text: 'Products'
                },
                {
                    label: 'content',
                    text: 'Content'
                },
                {
                    label: 'templates',
                    text: 'Templates'
                },
                {
                    label: 'colors',
                    text: 'Colors'
                },
                {
                    label: 'credit_cards',
                    text: 'Credit Cards'
                },
                {
                    label: 'terms',
                    text: 'Terms'
                },
                {
                    label: 'crm',
                    text: 'CRM'
                },
            ],
            siteInfo: [],
            siteId: 1,
            siteContent: []

        }
    },

    methods: {
        getSideId(siteId) {
            this.siteId = siteId;
            this.tab = 1;
            console.log(this.siteId);
        }
    },

    components: {
        SiteInfo,
        SiteContent,
        Template
    },

    mounted() {

        console.log(this.taglines);
    }
}
</script>
