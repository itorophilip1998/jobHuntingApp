import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


import Home from '../js/components/index';
import About from '../js/components/about';
import contact from '../js/components/contact';
import jobSingle from '../js/components/job-single';
import jobs from '../js/components/jobs';
import newpost from '../js/components/new-post';
import Premium from '../js/components/premium';

// Admin
import Admin from '../js/components/admin/admin';
import adminjobs from '../js/components/admin/jobs';
import adminseekers from '../js/components/admin/seekers';
import adminusers from '../js/components/admin/users';

const routes = [
        {
         path: '/',
         component: Home,
         meta: {
            auth: true,
            title: 'Home'
            }
        },

        {
            path: '/about',
            component: About,
             meta: {
                auth: true,
                title: 'About'
            }

        },
        {
            path: '/contact',
            component: contact,
            meta: {
                auth: true,
                title: 'Contact'
                }

        },
        {
             path: '/job/:name',
             component: jobSingle,
             meta: {
                auth: true,
                title: 'Job'
                }

            },

        {
         path: '/jobs',
         component: jobs,
         meta: {
            auth: true,
            title: 'Jobs'
            }
         },
        {
         path: '/post',
         component:newpost,
         meta: {
                auth: true,
                title: 'Post'
         }

        },
        {
         path: '/premium',
         component:Premium,
         meta: {
                auth: true,
                title: 'Premium'
         }

        },
        {
         path: '/dasboard',
         component:Admin,
         meta: {
                auth: true,
                title: 'Admin'
         }
        },
        {
         path: '/adminseekers',
         component:adminseekers,
         meta: {
                auth: true,
                title: 'seekers'
         }
        },
        {
         path: '/adminjobs',
         component:adminjobs,
         meta: {
                auth: true,
                title: 'jobs'
         }
        },
        {
         path: '/adminusers',
         component:adminusers,
         meta: {
                auth: true,
                title: 'users'
         }
        },

]


const router = new VueRouter({
    routes: routes,
    linkActiveClass: 'active',
    // mode: 'hash',
    hashbang: true,
    history: false,
})

export default router
