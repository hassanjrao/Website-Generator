<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Colors & Fonts</h6>

            <v-btn color="primary" :loading="loading" @click="submitSiteColorFont">Submit</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <v-row>

                <v-col class="shrink" cols="12" sm="6" md="6">
                    <v-autocomplete label="Font Family" :items="fontfamilies" v-model="selectedFontFamily" required
                      ></v-autocomplete>

                </v-col>
            </v-row>

            <v-row justify="center" align="center">


                <v-col class="shrink" style="min-width: 220px;" v-for="colorfont in colorsFonts" :key="colorfont.name">
                    {{ colorfont.label }}

                    <v-text-field v-model="colorfont.value" solo>

                        <template v-slot:append>

                            <v-menu top nudge-bottom="105" nudge-left="16" :close-on-content-click="false">

                                <template v-slot:activator="{ on }">
                                    <div :style="{
                                        backgroundColor: colorfont.value,
                                        cursor: 'pointer',
                                        height: '30px',
                                        width: '30px',
                                        borderRadius: menu ? '50%' : '4px',
                                        transition: 'border-radius 200ms ease-in-out'
                                    }" v-on="on" />
                                </template>
                                <v-card>

                                    <v-card-text class="pa-0">

                                        <v-color-picker v-model="colorfont.value" flat />
                                    </v-card-text>
                                </v-card>
                            </v-menu>
                        </template>
                    </v-text-field>
                </v-col>

            </v-row>

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
        colorsfonts: {
            type: Array,
            required: true
        },
        fontfamilies: {
            type: Array,
            required: true
        },
    },


    data() {

        return {
            loading: false,
            siteId: null,
            color: '#000000',
            mask: '!#XXXXXXXX',
            menu: false,
            colorsFonts: [],
            selectedFontFamily:1,
        }
    },


    computed: {
        swatchStyle() {
            const { color, menu } = this
            console.log(color, menu);
            return {
                backgroundColor: color,
                cursor: 'pointer',
                height: '30px',
                width: '30px',
                borderRadius: menu ? '50%' : '4px',
                transition: 'border-radius 200ms ease-in-out'
            }
        }
    },
                                                               
    methods: {

        submitSiteColorFont(){
            this.loading = true;
            axios.post('/sites/submit-site-color-font', {
                site_id: this.siteId,
                font_family: this.selectedFontFamily,
                colors_fonts: this.colorsFonts
            })
                .then(response => {
                    this.loading = false;
                    this.showStatus(response.data.message,'success');
                })
                .catch(error => {
                    this.loading = false;
                    this.showStatus(error.response.data.message,'error');
                });
        }

    },
    created() {
        this.showStatus = alert.showStatus;

        this.siteId = this.site_id;
        this.colorsFonts = this.colorsfonts;
    }
}

</script>
