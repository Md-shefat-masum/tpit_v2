<template>
    <div @mouseover="mouseover" @mouseleave="mouseleave">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <left-nav-list-group :role_permissions="['super_admin','admin']" :icon="`fa fa-home`" :text="`Dashboard`" :alert_count="2">
                <left-nav-list-item :to="'Dashboard'" :text="'Analytics'" />
            </left-nav-list-group>

            <left-nav-list-group :role_permissions="['super_admin']" :icon="`fa fa-users`" :text="`Users`" :alert_count="0">
                <left-nav-list-item :to="'AllUser'" :text="'All users'" />
                <left-nav-list-item :to="'CreateUser'" :text="'Create user'" />
            </left-nav-list-group>

            <left-nav-list-group :role_permissions="['super_admin']" :icon="`fa fa-users`" :text="`Roles`" :alert_count="0">
                <left-nav-list-item :to="'AllRole'" :text="'All roles'" />
                <left-nav-list-item :to="'CreateRole'" :text="'Create role'" />
            </left-nav-list-group>

            <left-nav-list-group :role_permissions="['super_admin','admin']" :icon="`fa fa-list`" :text="`Contact Message`" :alert_count="0">
                <left-nav-list-item :to="'AllContactMessage'" :text="'All'" />
                <left-nav-list-item :to="'CreateContactMessage'" :text="'Create'" />
            </left-nav-list-group>

            <li class="navigation-header">
                <span data-i18n="Apps &amp; Pages">managements</span>
            </li>

            <left-nav-list-single :role_permissions="['super_admin','admin']" :icon="'fa fa-envelope'" :text="'Email'" :alert_count="15" />

            <left-nav-list-group :role_permissions="['super_admin','admin','user']" :icon="`fa fa-gears`" :text="`Settings`" :alert_count="0">
                <left-nav-list-item :to="'settingProfile'" :text="'Profile'" />
                <left-nav-list-item :to="'settingPassword'" :text="'Change Password'" />
            </left-nav-list-group>

            <li class="nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i class="fa-solid fa-power-off"></i>
                    <span class="menu-title text-truncate" >Logout</span>
                </a>
            </li>
            <li class="nav-item">
                <a @click.prevent="fetch_logout()" class="d-flex align-items-center" href="#">
                    <i class="fa-solid fa-power-off"></i>
                    <span class="menu-title text-truncate" >Logout</span>
                </a>
            </li>
        </ul>

        <nav-time-left-watch></nav-time-left-watch>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
import LeftNavListGroup from './LeftNavListGroup.vue';
import LeftNavListItem from './LeftNavListItem.vue';
import LeftNavListSingle from './LeftNavListSingle.vue';
import NavTimeLeftWatch from "./NavTimeLeftWatch.vue";

export default{
    components: { NavTimeLeftWatch, LeftNavListItem, LeftNavListGroup, LeftNavListSingle },
    data: function(){
        return {
            html: null,
        }
    },
    created: function(){
        this.html = document.querySelector('html');
    },
    methods: {
        ...mapActions(['fetch_logout']),
        mouseover: function(){
            let nav_hide = this.html.classList.contains('nav-hide');
            if(nav_hide){
                this.html.classList.add('nav-hide-hover');
                this.html.classList.remove('nav-hide');
            }
        },
        mouseleave: function(){
            let nav_hide_hover = this.html.classList.contains('nav-hide-hover');
            if(nav_hide_hover){
                this.html.classList.add('nav-hide');
                this.html.classList.remove('nav-hide-hover');
            }
        },
    }
}
</script>

<style>

</style>
