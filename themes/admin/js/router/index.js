import Vue from "vue";
import Router from "vue-router";

import authRouter from "./modules/auth";

import Landing from "../components/Home.vue";
import Login from "../components/auth/Login.vue";
import Examples from "../components/Examples.vue";

Vue.use(Router);

const constantRoutes = [
  {
    path: "/",
    redirect: "/example",
  },
  {
    path: "/landing",
    alias: "/land",
    component: Landing,
  },
  {
    path: "/example",
    alias: "/exmaple",
    component: Examples,
  },
  {
    name: "singin",
    path: "/singin",
    component: Login,
  },
  //   ...authRouter,
];

export default new Router({
  // mode: 'history', // gh-pages
  scrollBehavior: () => ({ y: 0 }),
  routes: constantRoutes,
});
