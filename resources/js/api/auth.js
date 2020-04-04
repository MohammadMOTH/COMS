import Cookies from 'js-cookie'
import Vue from 'vue'
const TokenKey = 'Admin-Token'

export function getToken() {
  return Cookies.get(TokenKey)
}

export function setToken(token) {
  return Cookies.set(TokenKey, token)
}

export function removeToken() {
  return Cookies.remove(TokenKey)
}

export function isHaveAcsses(stringRoule) {
  
if (Vue.user.getUser().hasOwnProperty("rules"))
{
  
if ( Vue.user.getUser().rules=="admin")
return true;

else if (  (Vue.user.getUser().rules== "editor" && "montor"==stringRoule ) ||  Vue.user.getUser().rules==stringRoule)
return true;

}
return false;

  
}
export function isLoggedIn() {

if (this.getToken())
return true

return false

  }
