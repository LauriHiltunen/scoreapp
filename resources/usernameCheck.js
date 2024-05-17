/**
 * Gives style to one or multiple elements
 * @param {object} elements
 * @param {object} styles
 */
export default async function usernameExists(username,callback) {
  fetch("/taitaja/api/getUser?username=" + username).then(response => response.json()).then(data => {callback(Object.keys(data).length>0);});
}
