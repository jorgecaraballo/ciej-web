class DotsSpinner extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
        this.render();
    }

    static get observedAttributes() {
        return ['speed', 'size', 'colors'];
    }

    attributeChangedCallback(name, oldValue, newValue) {
        if (oldValue !== newValue) {
            this.render();
        }
    }

    getSpeed() {
        const speed = this.getAttribute('speed');
        switch(speed) {
            case 'slow': return '3s';
            case 'fast': return '1s';
            default: return '2s';
        }
    }

    getSize() {
        const size = this.getAttribute('size');
        switch(size) {
            case 'small': return '2.8rem';
            case 'large': return '4.8rem';
            default: return '3.6rem';
        }
    }

    getDotSize() {
        const size = this.getAttribute('size');
        switch(size) {
            case 'small': return '0.8rem';
            case 'large': return '1.6rem';
            default: return '1.2rem';
        }
    }

    getColors() {
        const colors = this.getAttribute('colors');
        if (colors) {
            const colorArray = colors.split(',').map(c => c.trim());
            return {
                col1: colorArray[0] || '#872341',
                col2: colorArray[1] || '#BE3144',
                col3: colorArray[2] || '#E17564'
            };
        }
        return {
            col1: '#872341',
            col2: '#BE3144',
            col3: '#E17564'
        };
    }

    render() {
        const speed = this.getSpeed();
        const size = this.getSize();
        const dotSize = this.getDotSize();
        const colors = this.getColors();

        this.shadowRoot.innerHTML = `
            <style>
                .dots-spinner {
                    width: ${size};
                    height: calc(${size} - 0.2rem);
                    position: relative;
                    animation: spin ${speed} linear infinite;
                }

                .dots-spinner > span {
                    display: block;
                    --size: ${dotSize};
                    height: var(--size);
                    width: var(--size);
                    background-color: ${colors.col1};
                    border-radius: 50%;
                    position: absolute;
                    animation: pulse 3s ease-out infinite var(--delay),
                               colorChange 4s linear infinite;
                }

                .dot-1 {
                    top: 0;
                    left: calc(50% - (var(--size) / 2));
                    --delay: 2s;
                }
                .dot-2 {
                    bottom: 0;
                    left: 0;
                    --delay: 1s;
                }
                .dot-3 {
                    bottom: 0;
                    right: 0;
                    --delay: 0s;
                }

                @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.2); }
                    100% { transform: scale(1); }
                }

                @keyframes colorChange {
                    0% { background-color: ${colors.col1}; }
                    33.33% { background-color: ${colors.col2}; }
                    66.66% { background-color: ${colors.col3}; }
                    100% { background-color: ${colors.col1}; }
                }

                @keyframes spin {
                    100% { transform: rotate(360deg); }
                }
            </style>

            <div class="dots-spinner">
                <span class="dot-1"></span>
                <span class="dot-2"></span>
                <span class="dot-3"></span>
            </div>
        `;
    }
}

customElements.define('dots-spinner', DotsSpinner);
