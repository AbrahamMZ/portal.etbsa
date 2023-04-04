import Vue from "vue";
import Router from "vue-router";

import authRouter from "./modules/auth";

import Landing from "../components/Home.vue";
import Login from "../components/auth/Login.vue";

Vue.use(Router);

const constantRoutes = [
  {
    path: "/",
    redirect: "/landing",
  },
  {
    path: "/landing",
    alias: "/land",
    component: Landing,
  },
  {
    name: "singin",
    path: "/singin",
    component: Login,
  },
  ...authRouter,
];

export default new Router({
  // mode: 'history', // gh-pages
  scrollBehavior: () => ({ y: 0 }),
  routes: constantRoutes,
});
