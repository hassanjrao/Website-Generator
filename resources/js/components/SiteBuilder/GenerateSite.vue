<template>
    <v-app app>


        <!-- header -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Generate Site</h6>

            <div>


                <v-btn color="warning" :loading="loading" @click="previewSite"
                    :disabled="!requiredSteps.every(step => step.submitted)">Preview</v-btn>

                <v-btn color="primary" :loading="loading" @click="generateSite"
                    :disabled="!requiredSteps.every(step => step.submitted)">Generate</v-btn>

            </div>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>

            <v-container>

                <v-row class="">

                    <v-col cols="12" sm="6" md="6">

                        <v-alert dense outlined :type="step.submitted ? 'success' : 'error'" v-for="step in requiredSteps"
                            :key="step.label">
                            {{ step.message }}
                        </v-alert>

                    </v-col>

                    <v-col cols="12" sm="6" md="6" class="mt-4">

                        <v-row class="border border-primary px-4">
                            <v-col cols="12" sm="6" md="6">
                                <v-text-field v-model="hostName" label="Host Name" required @input="$v.hostName.$touch()"
                                    :error-messages="hostNameErrors" hint="Like ftp.example.com"
                                    @blur="$v.hostName.$touch()"></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="6" md="6">
                                <v-text-field v-model="username" label="Username" required @input="$v.username.$touch()"
                                    :error-messages="usernameErrors" @blur="$v.username.$touch()"></v-text-field>
                            </v-col>

                            <v-col cols="12" sm="6" md="6">
                                <v-text-field v-model="password" label="Password" required @input="$v.password.$touch()"
                                    :error-messages="passwordErrors" @blur="$v.password.$touch()"></v-text-field>
                            </v-col>

                            <v-col cols="12" sm="6" md="6">
                                <v-text-field v-model="rootPath" label="Root Path" required @input="$v.rootPath.$touch()"
                                    :error-messages="rootPathErrors" hint="Like /public_html/ or /var/www/ or /htdocs/"
                                    @blur="$v.rootPath.$touch()"></v-text-field>
                            </v-col>

                            <v-col cols="12" sm="12" md="12" class="text-right">
                                <v-btn color="success" :disabled="!requiredSteps.every(step => step.submitted)"
                                    :loading="loading" @click="uploadSite">Upload</v-btn>
                            </v-col>
                        </v-row>



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
        stepsRequired: {
            type: Array,
            required: true
        },

    },

    validations: {
        hostName: {
            required
        },
        username: {
            required
        },
        password: {
            required
        },
        rootPath: {
            required
        },
    },


    data() {

        return {
            loading: false,
            siteId: null,
            downloadAble: false,
            requiredSteps: [],
            hostName: null,
            username: null,
            password: null,
            rootPath: null,
        }
    },

    watch: {
        requiredSteps() {
            console.log("steppss", this.requiredSteps);
        }
    },

    computed: {

        hostNameErrors() {
            const errors = []
            if (!this.$v.hostName.$dirty) return errors
            !this.$v.hostName.required && errors.push('Host name is required.')
            return errors
        },
        usernameErrors() {
            const errors = []
            if (!this.$v.username.$dirty) return errors
            !this.$v.username.required && errors.push('Username is required.')
            return errors
        },
        passwordErrors() {
            const errors = []
            if (!this.$v.password.$dirty) return errors
            !this.$v.password.required && errors.push('Password is required.')
            return errors
        },
        rootPathErrors() {
            const errors = []
            if (!this.$v.rootPath.$dirty) return errors
            !this.$v.rootPath.required && errors.push('Root path is required.')
            return errors
        },
    },

    methods: {
        generateSite() {
            window.open('/sites/download/' + this.siteId, '_blank');
        },
        previewSite() {
            window.open('/sites/preview/' + this.siteId, '_blank');
        },

        uploadSite() {

            this.$v.$touch()
            if (this.$v.$invalid) {
                return
            }

            this.loading = true;
            axios.post('/sites/upload-to-server', {
                site_id: this.siteId,
                host_name: this.hostName,
                username: this.username,
                password: this.password,
                root_path: this.rootPath,
            }).then(response => {
                this.loading = false;
                console.log(response);

                this.showStatus(response.data.message, "success");
            }).catch(error => {
                this.loading = false;
                console.log(error);
                this.showStatus(error.response.data.message, "error");
            });
        }
    },



    created() {
        this.showStatus = alert.showStatus;

        this.siteId = this.site_id;

        this.requiredSteps = this.stepsRequired;

        console.log(this.requiredSteps);

    },
    mounted() {
        console.log("generate mounted");
    }
}

</script>
