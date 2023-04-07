<template>
    <v-app app>


        <!-- body -->


        <v-card-text>



            <v-row class="justify-content-around align-items-center">

                <v-col cols="12" sm="6" md="4" >
                    <v-btn class="ma-2" color="secondary" @click="randomize()">
                        Randomize
                        <v-icon right dark>
                            mdi-cached
                        </v-icon>
                    </v-btn>
                </v-col>

                <v-col cols="12" sm="6" md="4">


                    <v-list two-line>
                        <v-list-item-group color="danger">
                            <draggable :list="layoutItems" :move="checkMove" @start="dragging = true"
                                @end="dragging = false">

                                <template v-for="(item, index) in layoutItems">
                                    <v-list-item style="border:1px solid black" class="mb-2">

                                        <v-list-item-content :key="item.name" class="d-flex" style="padding:0px !important">
                                            <v-switch :label="item.name" :value="item"
                                                v-model="layoutItemsIncluded" :disabled="item.name=='Header' || item.name=='Footer'">
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

    },

    data() {
        return {
            layoutItems: [],
            layoutItemsIncluded: [],
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
        }
    },
    mounted() {
        console.log('Template.vue mounted');
        this.layoutItems = this.layouts;
        this.layoutItemsIncluded = this.layouts;
    },
    created() {
        this.showStatus = alert.showStatus;

    },
    components: {
        draggable,
    },
}

</script>
