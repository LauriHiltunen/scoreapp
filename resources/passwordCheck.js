/**
 * Check values of multiple input fields and returns false if values dont match when values match true is returned
 * @param {object} elements
 * @param {function} callback
 * @return {boolean}
 */
export default function checkMatch(elements) {
  for (let i = 1; i < elements.length; i++) {
    if (elements[i].value != elements[0].value) {
      return false;
    }
  }
  return true;
}
/**
 * Returns true when given string is longer or same legth that given int
 * @param {string} password
 * @param {Number} minlength
 * @return {boolean}
 */
export function checkLength(password, minLength) {
  if (password.length >= minLength) {
    return true;
  }
  return false;
}
