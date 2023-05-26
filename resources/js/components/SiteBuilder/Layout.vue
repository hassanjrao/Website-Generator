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
                                                :disabled="item.fixed" :color="item.fixed ? 'grey' : 'primary'">
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
        randomizeAll: {
            type: Number,
            required: false,
            default: 0
        }

    },

    data() {
        return {
            layoutItems: [],
            layoutItemsIncluded: [],
            loading: false,
            siteId: null,
            disabledLayouts:[],
        }
    },
    computed: {


    },

    watch: {

        randomizeAll: function (val) {

            console.log('randomizeAll layout', val);
            this.randomize();
        }

    },

    methods: {
        randomize() {

            // change the layoutItems array to a random order except the fixed items

            let layoutItems = this.layoutItems;

            let fixedItems = this.disabledLayouts;

            let notFixedItems = layoutItems.filter(item => !fixedItems.includes(item));

            let randomItems = notFixedItems.sort(() => Math.random() - 0.5);


            // add the fixed items to the randomItems array, the position of the fixed item should be according to the id of the fixed item

            fixedItems.forEach(item => {
                randomItems.splice(item.id - 1, 0, item);
            });

            this.layoutItems = randomItems;



            // add random number of items to the layoutItemsIncluded array except the fixed items

            let layoutItemsIncluded = this.layoutItems;

            let notFixedItemsIncluded = layoutItemsIncluded.filter(item => !fixedItems.includes(item));

            let randomItemsIncluded = notFixedItemsIncluded.sort(() => Math.random() - 0.5);

            let randomNumber= Math.floor(Math.random() * randomItemsIncluded.length);

            let randomItemsIncludedSliced = randomItemsIncluded.slice(0, randomNumber);

            // add the fixed items to the randomItemsIncluded array, the position of the fixed item should be according to the id of the fixed item

            fixedItems.forEach(item => {
                randomItemsIncludedSliced.splice(item.id - 1, 0, item);
            });

            // add item with code productSection to the randomItemsIncluded array if it is not already included

            let productSection = this.layoutItems.find(item => item.label == 'productSection');


            if (!randomItemsIncludedSliced.includes(productSection)) {
                randomItemsIncludedSliced.push(productSection);
            }

            this.layoutItemsIncluded = randomItemsIncludedSliced;


        },
        checkMove(e) {
            return this.isDraggable(e.draggedContext);
        },
        isDraggable(context) {
            const { index, futureIndex } = context
            return !(this.layoutItems[index].fixed || this.layoutItems[futureIndex].fixed);
        },

        submitPageLayout() {

            this.loading = true;
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

                    this.$emit('includedLayoutItems', layoutItemsIncludedOrdered)
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
        this.layoutItemsIncluded = this.layouts.filter(item => item.selected == true)

        this.disabledLayouts = this.layoutItems.filter(item => item.fixed == true)


        this.$emit('includedLayoutItems', this.layoutItemsIncluded)

        console.log(this.layoutItems,this.layoutItemsIncluded)

        this.siteId = this.site_id;

        console.log("randomizeAll", this.randomizeAll);
    },
    created() {
        this.showStatus = alert.showStatus;

    },
    components: {
        draggable,
    },
}

</script>
