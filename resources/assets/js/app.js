
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('tabs', {
    template: `
        <div>
            <div class="tabs">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive}">
                        <a :href="tab.href" v-text="tab.name" @click="selectTab(tab)"></a>
                    </li>
                </ul>
            </div>    
            <div class="tabs-detail">
                <slot></slot>
            </div>
        </div>
    `,
    data() {
        return {
            tabs: []
        }
    },
    created() {
        this.tabs = this.$children;
    },
    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (selectedTab.name == tab.name);
            });
        }
    }
});

Vue.component('tab', {
    props: {
        name: { required: true},
        selected: { default: false} 
    },
    template: `
        <div v-show="isActive">
            <slot></slot>
        </div>
    `,
    data() {
        return {
            isActive: false
        }
    },
    mounted() {
        this.isActive = this.selected;
    },
    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    }
})


const app = new Vue({
    el: '#app',
    methods: {
        show() {
            this.showModal = true;
        }
    }
});
