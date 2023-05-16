import{c as i}from"./vuex.esm.8fdeb4b6.js";import{A as l}from"./WebmasterTools.ce57cdd2.js";import{C as c}from"./Blur.f36c594d.js";import{C as a}from"./Card.27307535.js";import{C as u}from"./ProBadge.66f48bdc.js";import{C as _}from"./SettingsRow.edbb3005.js";import{C as p}from"./Index.235069bb.js";import{n}from"./_plugin-vue2_normalizer.61652a7c.js";import"./WpTable.ee9185a7.js";import"./helpers.de7566d0.js";import"./index.ec9852b3.js";import"./isArrayLikeObject.9b4b678d.js";import"./default-i18n.3a91e0e5.js";import"./attachments.6af710f9.js";import"./cleanForSlug.51ef7354.js";import"./constants.0d8c074c.js";import"./Caret.19b10233.js";import"./_commonjsHelpers.f84db168.js";import"./html.14f2a8b9.js";import"./Index.6dd703b2.js";import"./MetaTag.1c306c27.js";import"./SaveChanges.e40a9083.js";import"./Tooltip.68a8a92b.js";import"./index.3c70e00e.js";import"./client.e62d6c37.js";import"./translations.c394afe3.js";import"./portal-vue.esm.98f2e05b.js";import"./Slide.15a07930.js";import"./Row.830f6397.js";const m={components:{CoreBlur:c,CoreCard:a,CoreProBadge:u,CoreSettingsRow:_,Cta:p},mixins:[l],data(){return{strings:{wpRoles:this.$t.__("WP Roles (Editor, Author)",this.$td),seoManagerRole:this.$t.__("SEO Manager Role",this.$td),seoEditorRole:this.$t.__("SEO Editor Role",this.$td),defaultSettings:this.$t.__("Default settings that just work",this.$td),granularControl:this.$t.__("Granular controls per role",this.$td),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Access Control",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Access Control is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")}}},computed:{getLiteRoles(){const r=this.getRoles;let t=1;for(;8>r.length;)r.push({label:this.$t.__("Custom Role",this.$td)+" "+t,name:"customRole"+t}),t++;return r}}};var d=function(){var t=this,o=t._self._c;return o("div",{staticClass:"aioseo-access-control-lite"},[o("core-card",{attrs:{slug:"accessControl"},scopedSlots:t._u([{key:"header",fn:function(){return[o("span",[t._v(t._s(t.strings.accessControl))]),o("core-pro-badge")]},proxy:!0},{key:"tooltip",fn:function(){return[t._v(" "+t._s(t.strings.tooltip)+" ")]},proxy:!0}])},[o("core-blur",[t._l(t.getLiteRoles,function(s){return[o("core-settings-row",{key:s.name,attrs:{name:s.label},scopedSlots:t._u([{key:"content",fn:function(){return[o("div",{staticClass:"toggle"},[o("base-toggle",{attrs:{disabled:!0,value:!0}},[t._v(" "+t._s(t.strings.useDefaultSettings)+" ")])],1)]},proxy:!0}],null,!0)})]})],2),o("cta",{attrs:{"feature-list":[t.strings.granularControl,t.strings.wpRoles,t.strings.seoManagerRole,t.strings.seoEditorRole],"cta-link":t.$links.getPricingUrl("access-control","access-control-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("access-control",null,"home"),"align-top":""},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.tooltip)+" ")]},proxy:!0}])})],1)],1)},f=[],g=n(m,d,f,!1,null,null,null,null);const e=g.exports,h={components:{AccessControl:e,AccessControlLite:e},computed:{...i(["isUnlicensed"])}};var C=function(){var t=this,o=t._self._c;return o("div",{staticClass:"aioseo-access-control"},[t.isUnlicensed?t._e():o("access-control"),t.isUnlicensed?o("access-control-lite"):t._e()],1)},$=[],v=n(h,C,$,!1,null,null,null,null);const V=v.exports;export{V as default};
