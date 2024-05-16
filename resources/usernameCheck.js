/**
 * Gives style to one or multiple elements
 * @param {object} elements
 * @param {object} styles
 */
export default async function usernameExists(username) {
      let request = await fetch("/taitaja/api/getUser?username=" + username);
    //   if(Object.keys(data).lenth > 0) {
    //     return data;
    //   } else {
    //     return data;
    //   }
    
    
    

}
