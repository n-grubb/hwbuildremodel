/**
 *  A simple testimonial slider component.
 *
 * TODO: Document the how-to of building native web components
 *
 */

const template = document.createElement('template');
template.innerHTML = `
  <style>
    :host {
      display: block;
      padding: 10px;
      border: 1px solid hsl(206, 74%, 54%);
      border-radius: 4px;
      background: hsl(206, 74%, 90%);
    }
  </style>
`

const buttonHtml = `
  <!-- testimonial slider controls -->
  <button class="slider-button prev" aria-hidden="true">
    <i class="fas fa-arrow-left"></i>
  </button>
  <button class="slider-button next" aria-hidden="true">
    <i class="fas fa-arrow-right"></i>
  </button>
`

/*
  <div class="testimonial-slider">
    <div class="testimonial-slide">
      <div class="testimonial-text">
        <p>They were professional, prompt and worked around our business schedule.</p>
      </div>
      <span class="testimonial-author">Laura H.</span>
    </div>
			<div class="testimonial-slide active">
				<div class="testimonial-text">
					<p>They worked very hard.  They were amiable, had a great attitude and discussed things as the project moved along. I would definitely have them for another project in the future.</p>
				</div>
				<span class="testimonial-author">Carolynne E.</span>
			</div>
			<div class="testimonial-slide">
				<div class="testimonial-text">
					<p>You won&#8217;t be disappointed. It&#8217;s nice to find honest hard-working ,young adults who take pride in their work.I have received positive feedback from my neighbors. I just love it!!!!</p>
				</div>
				<span class="testimonial-author">Gayle W.</span>
			</div>
		</div>
		
  <div>
    <slot></slot>
  </div>
`
*/

// this value is private since it will not be exported
const _testimonials = Symbol('testimonials')

class TestimonialSlider extends HTMLElement {

  constructor() {
    super()
    /*
     * We don't want the testimonials to be directly manipulated by the user.
     * 
     * We could add our testimonials as a private field... but private fields are not yet available
     * out of the box in FF (as of the date this component was created).
     * 
     * Since this is a simple, static site where we prefer not to use bundler - let's use a 
     * creative application of a Symbol instead. Using the symbol, a user cannot directy access 
     * our `_testimonials` list. This is not truly private but it gets us pretty close.
     */
    this[_testimonials] = []

    /*
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.appendChild(template.content.cloneNode(true));
    */
  }

  /**
   * @typedef testimonial
   * @type {object}
   * @property {string} author
   * @property {string} text
   */

  /**
   * Retrieves the testimonials & return them.
   * @returns {testimonial[]}
   */
   get testimonials() {
    return this[_testimonials]
  }

  /**
   * Receive an array of testimonial objects to display
   * @param {testimonial[]} testimonials 
   */
  set testimonials(value) {
    this[_testimonials] = value
  }

  // Specify observed attributes, needed for the attributeChangedCallback to work
  static get observedAttributes() {
    return []
  }

  // Invoked when the custom element is first connected to the document's DOM.
  connectedCallback() {
    console.log('component connected.')
  }

  //  Invoked when the custom element is disconnected from the document's DOM.
  disconnectedCallback() {
    console.log('component disconnected.')
  }

  // Invoked when the custom element is moved to a new document.
  adoptedCallback() {
    console.log('component adopted.')
  }

  // Invoked when one of the custom element's attributes is added, removed, or changed.
  attributeChangedCallback(name, oldVal, newVal) {
    console.log(`Attribute: ${name} changed from ${oldVal} to ${newVal}.`)
  }
}

// add to CustomElementRegistry
window.customElements.define('testimonial-slider', TestimonialSlider)
