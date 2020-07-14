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
import adminapplyjobs from '../js/components/admin/adminapplyjobs';
import admincontact from '../js/components/admin/admincontact';
import adminemployers from '../js/components/admin/adminemployers';
import adminjobs from '../js/components/admin/adminjobs';
import adminpayment from '../js/components/admin/adminpayment';
import adminprofile from '../js/components/admin/adminprofile';
import adminusers from '../js/components/admin/adminusers';
import adminjobseekers from '../js/components/admin/adminjobseekers';

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

        // Admin
        {
         path: '/',
         component:Admin,
         meta: {
                auth: true,
                title: 'Admin'
         }
        },
        {
         path: '/adminapplyjobs',
         component:adminapplyjobs,
         meta: {
                auth: true,
                title: 'applyjobs'
         }
        },
        {
         path: '/admincontact',
         component:admincontact,
         meta: {
                auth: true,
                title: 'contact'
         }
        },
        {
         path: '/adminemployers',
         component:adminemployers,
         meta: {
                auth: true,
                title: 'employers'
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
         path: '/adminpayment',
         component:adminpayment,
         meta: {
                auth: true,
                title: 'payment'
         }
        },
        {
         path: '/adminprofile',
         component:adminprofile,
         meta: {
                auth: true,
                title: 'profile'
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
        {
         path: '/jobseekers',
         component:adminjobseekers,
         meta: {
                auth: true,
                title: 'Jobseekers'
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
