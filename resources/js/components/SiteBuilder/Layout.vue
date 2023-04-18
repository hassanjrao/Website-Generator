<template>
    <v-app app>


        <!-- body -->
        <v-card-title class="d-flex justify-content-between">
            <h6 class="headline mb-0">Layout</h6>


            <div class="d-flex justify-content-center">
                <v-btn color="secondary" class="mr-2" @click="randomize">Randomize</v-btn>


                <v-btn color="primary" :loading="loading" @click="submitPageLayout">Submit</v-btn>
            </div>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>


        <v-card-text>



            <v-row class="justify-content-around align-items-center">


                <v-col cols="12" sm="6" md="4">


                    <v-list two-line>
                        <v-list-item-group color="danger">
                            <draggable :list="layoutItems" :move="checkMove" @start="dragging = true"
                                @end="dragging = false">

                                <template v-for="(item, index) in layoutItems">
                                    <v-list-item style="border:1px solid black" class="mb-2">

                                        <v-list-item-content :key="item.name" class="d-flex" style="padding:0px !important">
                                            <v-switch :label="item.name" :value="item" v-model="layoutItemsIncluded"
                                                :disabled="item.name == 'Header' || item.name == 'Footer'">
                                            </v-switch>
                                        </v-list-item-content>


                                    </v-list-item>

                                </template>

                            </draggable>

                        </v-list-item-group>

                    </v-list>

                </v-col>
            </v-row>

        </v-card-text>



    </v-app>
</template>

<script>

import alert from '../../shared/alert'
import draggable from 'vuedraggable'


export default {

    props: {
        layouts: {
            type: Array,
            required: true
        },
        site_id: {
            type: Number,
            required: true
        },

    },

    data() {
        return {
            layoutItems: [],
            layoutItemsIncluded: [],
            loading: false,
            siteId: null,
        }
    },
    computed: {


    },

    methods: {
        randomize() {

            // change the layoutItems array to a random order except the first and last item

            let layoutItems = this.layoutItems;

            let firstItem = layoutItems[0];
            let lastItem = layoutItems[layoutItems.length - 1];

            layoutItems = layoutItems.slice(1, layoutItems.length - 1);

            layoutItems.sort(() => Math.random() - 0.5);

            layoutItems.unshift(firstItem);
            layoutItems.push(lastItem);

            this.layoutItems = layoutItems;


        },
        checkMove(e) {
            return this.isDraggable(e.draggedContext);
        },
        isDraggable(context) {
            const { index, futureIndex } = context
            return !(this.layoutItems[index].fixed || this.layoutItems[futureIndex].fixed);
        },

        submitPageLayout() {
            console.log('layoutItemIncluded', this.layoutItemsIncluded);
            console.log('layoutItems', this.layoutItems);

            //get only those items from layoutItems that are included in layoutItemsIncluded with the same order as layoutItems

            let layoutItemsIncluded = this.layoutItemsIncluded;
            let layoutItems = this.layoutItems;

            let layoutItemsIncludedOrdered = [];

            layoutItems.forEach(item => {
                layoutItemsIncluded.forEach(itemIncluded => {
                    if (item.name == itemIncluded.name) {
                        layoutItemsIncludedOrdered.push(itemIncluded);
                    }
                });
            });

            axios.post('/sites/submit-site-page-layout', {
                layout_items: layoutItemsIncludedOrdered,
                site_id: this.siteId
            })
                .then(response => {
                    console.log(response);
                    this.loading = false;

                    this.showStatus(response.data.message, 'success')


                    this.$emit('layoutSubmitted', true)
                })
                .catch(error => {
                    console.log(error);

                    this.loading = false;
                    this.showStatus(error.response.data.message, 'error')
                });



        }
    },
    mounted() {
        console.log('Template.vue mounted');
        this.layoutItems = this.layouts;
        this.layoutItemsIncluded = this.layouts;

        this.siteId = this.site_id;
    },
    created() {
        this.showStatus = alert.showStatus;

    },
    components: {
        draggable,
    },
}

</script>
