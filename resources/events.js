/**
* Sets onevent functionality to one or multiple elements
* @param {object} elements
* @param {object} callback
*/
export default function setEventListeners(elements,callback) {
    Object.values(elements).forEach(element => {
        for(var e in callback) {
            element[e] = callback[e];
        }
    });
}