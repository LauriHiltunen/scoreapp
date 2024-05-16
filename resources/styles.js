/**
 * Gives style to one or multiple elements
 * @param {object} elements
 * @param {object} styles
 */
export default function setStyles(elements, styles) {
  for (var i = 0; i < elements.length; i++) {
    for (var s in styles) {
      elements[i].style[s] = styles[s];
    }
  }
}
