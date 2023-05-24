<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Products</h6>

            <v-btn color="primary" :loading="loading" @click="submitProductCategory()">Submit</v-btn>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <!-- show validation error -->


            <v-container>

                <v-row>


                    <v-col cols="12" sm="4" md="4">
                        <v-autocomplete label="Advertising Company" clearable :items="advertisingcompanies"
                            v-model="selectedAdvertisingCompany" required @input="$v.selectedAdvertisingCompany.$touch()"
                            :error-messages="selectedAdvertisingCompanyErrors"
                            @blur="$v.selectedAdvertisingCompany.$touch()"></v-autocomplete>

                    </v-col>


                    <v-col cols="12" sm="8" md="8" v-if="selectedAdvertisingCompany">

                        <v-autocomplete label="Categories"  clearable :items="categories"
                            v-model="selectedCategory" chips deletable-chips
                            @input="$v.selectedCategory.$touch()"
                            :error-messages="selectedCategoryErrors"
                            required
                            @blur="$v.selectedCategory.$touch()"></v-autocomplete>

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

        advertisingcompanies: {
            type: Array,
            required: true
        },



    },

    validations: {
        selectedAdvertisingCompany: {
            required
        },

        selectedCategory: {
            requiredIf: requiredIf(function () {
                return this.selectedAdvertisingCompany;
            })
        }

    },

    data() {

        return {
            loading: false,
            siteId: null,
            selectedAdvertisingCompany: null,
            categories: [],
            selectedCategory: null

        }
    },


    methods: {

        submitProductCategory() {
            this.$v.$touch();


            if (!this.$v.$error) {
                this.loading = true;
                axios.post('/sites/submit-site-product-category', {
                    site_id: this.siteId,
                    product_category_id: this.selectedCategory,
                })
                    .then(response => {
                        this.loading = false;
                        this.showStatus(response.data.message, 'success');


                    this.$emit('productsSubmitted', true)
                    })
                    .catch(error => {
                        this.loading = false;
                        this.showStatus(error.response.data.message, 'error');
                    });
            }
        },


        getProductCategories() {

            this.loading = true;

            axios.get('/sites/get-categories', {
                params: {
                    site_id: this.siteId,
                    advertising_company_id: this.selectedAdvertisingCompany,
                }
            })
                .then(response => {
                    this.loading = false;

                    this.categories = response.data.data.categories;

                    let selectedCategory=this.categories.find(category=>category.selected==true)

                    if(selectedCategory)
                    {
                        this.selectedCategory= selectedCategory.value
                    }

                    console.log(this.categories);

                })
                .catch(error => {
                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error');
                });
        }
    },

    watch: {
        selectedAdvertisingCompany(val) {

            if (val) {
                this.getProductCategories();
            }

        }
    }
    ,
    created() {
        this.showStatus = alert.showStatus;
        this.siteId = this.site_id;


        let selectedAdvertisingCompany= this.advertisingcompanies.find(advertisingcompany => advertisingcompany.selected==true)

        console.log("selectedAdvertisingCompany",selectedAdvertisingCompany,this.advertisingcompanies);

        if(selectedAdvertisingCompany)
        {
            this.selectedAdvertisingCompany= selectedAdvertisingCompany.value
        }

    },

    computed: {

        selectedAdvertisingCompanyErrors() {
            const errors = [];
            if (!this.$v.selectedAdvertisingCompany.$dirty) return errors;
            !this.$v.selectedAdvertisingCompany.required && errors.push('Advertising Company is required.');
            return errors;
        },

        selectedCategoryErrors() {

            const errors = [];

            if (!this.$v.selectedCategory.$dirty) return errors;
            !this.$v.selectedCategory.requiredIf && errors.push('Category is required.');
            return errors;

        },
    }
}

</script>
