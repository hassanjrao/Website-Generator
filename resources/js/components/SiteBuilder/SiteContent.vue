<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Site Content</h6>

            <div class="d-flex justify-content-center">
                <v-btn color="secondary" class="mr-2" @click="randomize">Randomize</v-btn>

                <v-btn color="primary" :loading="loading" @click="submitSiteContent">Submit</v-btn>
            </div>
        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <v-container>
                <v-row>

                    <v-col cols="12" sm="12" md="12">

                        <v-autocomplete label="Slogan" clearable :items="slogans" v-model="selectedSlogan" required
                            @input="$v.selectedSlogan.$touch()" :error-messages="selectedSloganErrors"
                            @blur="$v.selectedSlogan.$touch()"></v-autocomplete>

                    </v-col>


                    <v-col cols="12" sm="12" md="12">

                        <v-autocomplete label="Tag Line" clearable :items="taglines" v-model="selectedTagline" required
                            @input="$v.selectedTagline.$touch()" :error-messages="selectedTaglineErrors"></v-autocomplete>

                    </v-col>


                    <v-col cols="12" sm="12" md="12">

                        <v-autocomplete label="About Us Title" clearable :items="aboutustitles" required
                            @input="$v.selectedAboutUsTitle.$touch()" :error-messages="selectedAboutUsTitleErrors"
                            v-model="selectedAboutUsTitle"></v-autocomplete>

                    </v-col>

                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="About Us Content" clearable :items="aboutuscontent" required
                            @input="$v.selectedAboutUsContent.$touch()" :error-messages="selectedAboutUsContentErrors"
                            v-model="selectedAboutUsContent"></v-autocomplete>
                    </v-col>

                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="Shop Title" clearable :items="shoptitles" required
                            @input="$v.selectedShopTitle.$touch()" :error-messages="selectedShopTitleErrors"
                            v-model="selectedShopTitle"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="Button Name" clearable :items="buttonnames" required
                            @input="$v.selectedButtonName.$touch()" :error-messages="selectedButtonNameErrors"
                            v-model="selectedButtonName"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="Popular Title" clearable :items="populartitles" required
                            @input="$v.selectedPopularTitle.$touch()" :error-messages="selectedPopularTitleErrors"
                            v-model="selectedPopularTitle"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="Contact Title" clearable :items="contacttitles" required
                            @input="$v.selectedContactTitle.$touch()" :error-messages="selectedContactTitleErrors"
                            v-model="selectedContactTitle"></v-autocomplete>
                    </v-col>


                    <v-col cols="12" sm="12" md="12">
                        <v-autocomplete label="Contact Conten" clearable :items="contactcontent" required
                            @input="$v.selectedContactContent.$touch()" :error-messages="selectedContactContentErrors"
                            v-model="selectedContactContent"></v-autocomplete>
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
        randomizeAll: {
            type: Number,
            required: false,
            default: 0
        }
    },

    validations: {
        selectedSlogan: {
            required
        },
        selectedTagline: {
            required
        },
        selectedAboutUsTitle: {
            required
        },
        selectedAboutUsContent: {
            required
        },
        selectedShopTitle: {
            required
        },
        selectedButtonName: {
            required
        },
        selectedPopularTitle: {
            required
        },
        selectedContactTitle: {
            required
        },
        selectedContactContent: {
            required
        },
    },

    data() {

        return {
            selectedSlogan: null,
            selectedTagline: null,
            selectedAboutUsTitle: null,
            selectedAboutUsContent: null,
            selectedShopTitle: null,
            selectedButtonName: null,
            selectedPopularTitle: null,
            selectedContactTitle: null,
            selectedContactContent: null,
            loading: false,
            siteId: null,
        }
    },

    computed: {

        selectedSloganErrors() {
            const errors = []
            if (!this.$v.selectedSlogan.$dirty) return errors
            !this.$v.selectedSlogan.required && errors.push('Slogan is required.')
            return errors
        },
        selectedTaglineErrors() {
            const errors = []
            if (!this.$v.selectedTagline.$dirty) return errors
            !this.$v.selectedTagline.required && errors.push('Tag Line is required.')
            return errors
        },
        selectedAboutUsTitleErrors() {
            const errors = []
            if (!this.$v.selectedAboutUsTitle.$dirty) return errors
            !this.$v.selectedAboutUsTitle.required && errors.push('About Us Title is required.')
            return errors
        },
        selectedAboutUsContentErrors() {
            const errors = []
            if (!this.$v.selectedAboutUsContent.$dirty) return errors
            !this.$v.selectedAboutUsContent.required && errors.push('About Us Content is required.')
            return errors
        },
        selectedShopTitleErrors() {
            const errors = []
            if (!this.$v.selectedShopTitle.$dirty) return errors
            !this.$v.selectedShopTitle.required && errors.push('Shop Title is required.')
            return errors
        },
        selectedButtonNameErrors() {
            const errors = []
            if (!this.$v.selectedButtonName.$dirty) return errors
            !this.$v.selectedButtonName.required && errors.push('Button Name is required.')
            return errors
        },
        selectedPopularTitleErrors() {
            const errors = []
            if (!this.$v.selectedPopularTitle.$dirty) return errors
            !this.$v.selectedPopularTitle.required && errors.push('Popular Title is required.')
            return errors
        },
        selectedContactTitleErrors() {
            const errors = []
            if (!this.$v.selectedContactTitle.$dirty) return errors
            !this.$v.selectedContactTitle.required && errors.push('Contact Title is required.')
            return errors
        },
        selectedContactContentErrors() {
            const errors = []
            if (!this.$v.selectedContactContent.$dirty) return errors
            !this.$v.selectedContactContent.required && errors.push('Contact Content is required.')
            return errors
        },

    },

    watch: {
        randomizeAll: function (val) {

            console.log("randomizeAll sitecont: " + val)

            this.randomize();
        }
    },



    methods: {

        randomizeAllMethod(){
            console.log("randomizeAll sitecont: ")
        },

        randomize() {

            this.selectedSlogan = this.slogans[Math.floor(Math.random() * this.slogans.length)].value
            this.selectedTagline = this.taglines[Math.floor(Math.random() * this.taglines.length)].value
            this.selectedAboutUsTitle = this.aboutustitles[Math.floor(Math.random() * this.aboutustitles.length)].value
            this.selectedAboutUsContent = this.aboutuscontent[Math.floor(Math.random() * this.aboutuscontent.length)].value
            this.selectedShopTitle = this.shoptitles[Math.floor(Math.random() * this.shoptitles.length)].value
            this.selectedButtonName = this.buttonnames[Math.floor(Math.random() * this.buttonnames.length)].value
            this.selectedPopularTitle = this.populartitles[Math.floor(Math.random() * this.populartitles.length)].value
            this.selectedContactTitle = this.contacttitles[Math.floor(Math.random() * this.contacttitles.length)].value
            this.selectedContactContent = this.contactcontent[Math.floor(Math.random() * this.contactcontent.length)].value

        },




        submitSiteContent() {
            this.$v.$touch()
            if (this.$v.$invalid) {
                return
            }

            this.loading = true

            axios.post("/sites/submit-site-content", {
                site_id: this.site_id,
                slogan_id: this.selectedSlogan,
                tag_line_id: this.selectedTagline,
                about_us_title_id: this.selectedAboutUsTitle,
                about_us_content_id: this.selectedAboutUsContent,
                shop_title_id: this.selectedShopTitle,
                button_name_id: this.selectedButtonName,
                popular_title_id: this.selectedPopularTitle,
                contact_title_id: this.selectedContactTitle,
                contact_content_id: this.selectedContactContent,
            })
                .then(response => {
                    console.log(response.data)
                    this.loading = false
                    this.showStatus(response.data.message, "success")


                    this.$emit('contentSubmitted', true)

                })
                .catch(error => {
                    console.log(error)
                    this.loading = false
                    this.showStatus(error.response.data.message, "error")
                })

        }
    },
    created() {
        this.showStatus = alert.showStatus;
    }
}

</script>
