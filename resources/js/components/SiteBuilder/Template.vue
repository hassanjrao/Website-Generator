<template>
    <v-app app>


        <!-- header -->
        <v-card-title>
            <h6 class="headline mb-0">Templates</h6>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>


        <!-- body -->
        <v-card-text>
            <v-container>
                <v-row>

                    <v-col cols="12" sm="6" md="4">


                        <v-autocomplete label="Header Template" clearable :items="headertemplates"
                            v-model="selectedHeaderTemplate" required @input="$v.selectedHeaderTemplate.$touch()"
                            :error-messages="selectedHeaderTemplateErrors"
                            @blur="$v.selectedHeaderTemplate.$touch()"></v-autocomplete>

                    </v-col>

                    <v-col cols="12" sm="6" md="4">

                        <v-autocomplete label="Hero Section" clearable :items="herosections" v-model="selectedHeroSection"
                            required @input="$v.selectedHeroSection.$touch()" :error-messages="selectedHeroSectionErrors"
                            @blur="$v.selectedHeroSection.$touch()"></v-autocomplete>
                    </v-col>

                    <v-col cols="12" sm="6" md="4">

                        <v-autocomplete label="Product Section" clearable :items="productsections"
                            v-model="selectedProductSection" required @input="$v.selectedProductSection.$touch()"
                            :error-messages="selectedProductSectionErrors"
                            @blur="$v.selectedProductSection.$touch()"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="6" md="4">

                        <v-autocomplete label="About Section" clearable :items="aboutsections"
                            v-model="selectedAboutSection" required @input="$v.selectedAboutSection.$touch()"
                            :error-messages="selectedAboutSectionErrors"
                            @blur="$v.selectedAboutSection.$touch()"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="6" md="4">

                        <v-autocomplete label="Contact Section" clearable :items="contactsections"
                            v-model="selectedContactSection" required @input="$v.selectedContactSection.$touch()"
                            :error-messages="selectedContactSectionErrors"
                            @blur="$v.selectedContactSection.$touch()"></v-autocomplete>
                    </v-col>


                </v-row>

            </v-container>


        </v-card-text>


    </v-app>
</template>

<script>

import { required } from 'vuelidate/lib/validators'
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
    },


    data() {
        return {
            selectedHeaderTemplate: null,
            selectedHeroSection: null,
            selectedProductSection: null,
            selectedAboutSection: null,
            selectedContactSection: null,
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
    },
    mounted() {
        console.log('Template.vue mounted');
    },
    created() {
        this.showStatus = alert.showStatus;
    }
}

</script>
