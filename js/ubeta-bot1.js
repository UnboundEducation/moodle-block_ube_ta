// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block UBE TA
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

export class UBETA {

    //settings
    apiKey = null;
    expires = null;
    signature = null; 
    filters = null;
    showSource = false;
    resultCount = null;
    condensePrompt = null;
    questionPrompt = null;
    temperature = null;
    startOpen = false;
    customCSS = null;
    apiPath = "http://localhost:3000/api/v1";
    cssPath = "http://localhost:3000/packs/ubeta-bot1.css";
    opener = "Hello.  How may I help you?";
    inputPlaceholder = "Ask a question...";

    // internal variables
    mouseStartX;
    mouseStartY;
    root;

    /**
     * Create a new instance of the chatbot
     * 
     * @param {object} settings An object containing the settings for the chatbot
     * @param {string} settings.apiKey The API key for the chatbot
     * @param {string} settings.expires The expiration date for the API key
     * @param {string} settings.signature The signature for the API key
     * @param {string} settings.filters The filters to apply to the chatbot response
     * @param {boolean} settings.showSource Whether to show the source of the chatbot response
     * @param {number} settings.resultCount The number of results to return from the chatbot
     * @param {number} settings.condensePrompt The condense prompt for the chatbot
     * @param {number} settings.questionPrompt The question prompt for the chatbot
     * @param {number} settings.temperature The temperature for the chatbot
     * @param {boolean} settings.startOpen Whether the chat window should start open
     * @param {string} settings.customCSS Custom CSS to apply to the chat window
     * @param {string} settings.apiPath The path to the chatbot API
     * @param {string} settings.cssPath The path to the chatbot CSS
     * @param {string} settings.opener The opening message for the chatbot
     * @param {string} settings.inputPlaceholder The placeholder text for the chatbot input
     * 
     * @returns {UBETA} A new instance of the chatbot
     *  
     */
    constructor(settings){

        // load settings
        for (let key in settings) {
            this[key] = settings[key];
        }

        // check required settings
        const requiredSettings = ['apiKey', 'expires', 'signature'];
        for (let value of requiredSettings) {
            if(!this[value]){
                console.error(`UBETA: ${value} is required`);
                return;
            }
        }

        this.renderInit();
    }

    /**
     * Render the initial HTML for the chat window and connect event listeners
     */
    renderInit(){

        // load css
        const head = document.querySelector("head");
        const css = document.createElement('link');
        css.href = this.cssPath;
        css.rel = 'stylesheet';
        head.appendChild(css);

        if (this.customCSS) {
            const style = document.createElement('style');
            style.innerHTML = this.customCSS;
            head.appendChild(style);
        }

        // load html
        this.root = document.createElement('div');
        document.body.appendChild(this.root);
        this.root.innerHTML = `
            <div class="ubeta-chat-window"  ${this.startOpen?'':'hidden'}>
                <div class="ubeta-chat-header">
                    <svg class="ubeta-window-handle" role="slider" width="64px" height="64px" viewBox="-4.08 -4.08 32.16 32.16" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(180)" stroke="#000000" stroke-width="0.00024000000000000003"><path d="M22.354 9.354l-.707-.707-13 13 .707.707zm0 7l-.707-.707-6 6 .707.707z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
                    <svg class="ubeta-icon ubeta-close" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
                </div>
                <div class="ubeta-chat-log">
                    <div class='ubeta-message ubeta-assistant' aria-label='assistant'>${this.opener}</div>
                </div>
                <div class='ubeta-ellipsis ubeta-loading' hidden></div>
                <div class="ubeta-input-container">
                    <input class="ubeta-console" type="text" placeholder="${this.inputPlaceholder}" />
                    <svg class="ubeta-icon ubeta-send" role="button" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                </div>
                <div class="ubeta-chat-footer"></div>
            </div>
            <div class="ubeta-float-button">
               <svg class="ubeta-float-icon" width="64px" height="64px" viewBox="-2.88 -2.88 29.76 29.76" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003"><path d="M8.144 6.30723C8.57804 6.07535 9.04511 6.00076 9.49986 6.00073C10.0263 6.0007 10.6377 6.17363 11.1315 6.57829C11.6485 7.00192 11.9999 7.65186 11.9999 8.5C11.9999 9.47459 11.3112 10.0037 10.9229 10.302C10.8927 10.3252 10.8644 10.347 10.8383 10.3675C10.4137 10.7012 10.2499 10.8795 10.2499 11.25C10.2499 11.6642 9.91411 12 9.4999 12C9.08569 12 8.7499 11.6642 8.7499 11.25C8.7499 10.116 9.46115 9.54195 9.9115 9.18806C10.4248 8.78469 10.4999 8.69484 10.4999 8.5C10.4999 8.10296 10.3513 7.87825 10.1808 7.73853C9.98714 7.57985 9.72352 7.50072 9.49994 7.50073C9.20469 7.50075 9.00176 7.54962 8.8508 7.63027C8.70735 7.7069 8.55557 7.84146 8.40923 8.11137C8.21181 8.47551 7.75657 8.61066 7.39244 8.41324C7.0283 8.21582 6.89315 7.76058 7.09057 7.39644C7.35423 6.91012 7.70245 6.54311 8.144 6.30723Z" fill="#333333"></path> <path d="M9.50007 15.0001C10.0524 15.0001 10.5001 14.5524 10.5001 14.0001C10.5001 13.4477 10.0524 13 9.50007 13C8.94775 13 8.5 13.4477 8.5 14.0001C8.5 14.5524 8.94775 15.0001 9.50007 15.0001Z" fill="#333333"></path> <path d="M9.50005 3C5.35792 3 2.00005 6.35786 2.00005 10.5C2.00005 11.6329 2.25172 12.7088 2.70271 13.6734C2.44867 14.6714 2.16486 15.7842 1.97847 16.5147C1.74544 17.428 2.56787 18.2588 3.48221 18.039C4.23244 17.8587 5.38546 17.5819 6.41294 17.337C7.35525 17.7631 8.40089 18 9.50005 18C13.6422 18 17.0001 14.6421 17.0001 10.5C17.0001 6.35786 13.6422 3 9.50005 3ZM3.50005 10.5C3.50005 7.18629 6.18634 4.5 9.50005 4.5C12.8138 4.5 15.5001 7.18629 15.5001 10.5C15.5001 13.8137 12.8138 16.5 9.50005 16.5C8.53932 16.5 7.63335 16.2748 6.83009 15.8749L6.58667 15.7537L6.32216 15.8167C5.39943 16.0363 4.33336 16.2919 3.5344 16.4838C3.73315 15.7047 3.99632 14.6724 4.22448 13.7757L4.29467 13.4998L4.16415 13.2468C3.73993 12.4246 3.50005 11.4914 3.50005 10.5Z" fill="#333333"></path> <path d="M14.5001 21.0001C12.5307 21.0001 10.7386 20.241 9.40039 18.9995C9.43359 18.9999 9.46683 19.0001 9.50011 19.0001C10.2181 19.0001 10.9152 18.911 11.5812 18.7434C12.4451 19.2254 13.4405 19.5001 14.5001 19.5001C15.4608 19.5001 16.3668 19.2748 17.17 18.8749L17.4135 18.7537L17.678 18.8167C18.5995 19.0361 19.6431 19.2625 20.4171 19.4262C20.2422 18.6757 20.0035 17.6711 19.7756 16.7757L19.7055 16.4999L19.836 16.2469C20.2602 15.4247 20.5001 14.4915 20.5001 13.5001C20.5001 11.3853 19.4061 9.52617 17.7531 8.45761C17.5747 7.73435 17.3038 7.04756 16.9535 6.41052C19.8908 7.42684 22.0001 10.2171 22.0001 13.5001C22.0001 14.6332 21.7483 15.7094 21.2971 16.6741C21.5501 17.6821 21.8064 18.774 21.9689 19.4773C22.1733 20.3623 21.3939 21.1633 20.5014 20.9768C19.7743 20.8248 18.6318 20.581 17.588 20.3367C16.6455 20.763 15.5996 21.0001 14.5001 21.0001Z" fill="#333333"></path></svg>
            </div>
        `;

        this.root.querySelector('.ubeta-float-button').addEventListener('click', () => {
            this.root.querySelector('.ubeta-chat-window').toggleAttribute('hidden');
        });
        this.root.querySelector('.ubeta-close').addEventListener('click', () => {
            this.root.querySelector('.ubeta-chat-window').toggleAttribute('hidden');
        });

        this.root.querySelector('.ubeta-window-handle').addEventListener('mousedown', (e) =>{
            this.mouseStartX = e.x;
            this.mouseStartY = e.y;
            document.addEventListener("mousemove", this.resizeWindow, false);
        }, false);
        document.addEventListener("mouseup", (e) => {
            document.removeEventListener("mousemove", this.resizeWindow, false);
        }, false);
        

        this.root.querySelector('.ubeta-console').addEventListener('keyup', (e) => {
            if(e.keyCode === 13){
                this.addUserChat(e.target.value);
                e.target.value = '';
            }
        });
        this.root.querySelector('.ubeta-send').addEventListener('click', (e) => {
            let el = this.root.querySelector('.ubeta-console');
            this.addUserChat(el.value);
            el.value = '';
        });
    }

    /**
     * Ask Oracle to respond to the given message and add the response to the chat log
     * 
     * @param {string} message The message to send to Oracle for response
     */
    askOracle(message){
        const history = this.getTranscript();

        var body = {
            question: message,
            history: history,
        };
        if (this.filters){
            body.filters = this.filters;
        }
        if (this.resultCount !== null){
            body.resultCount = this.resultCount;
        }
        if (this.condensePrompt){
            body.condensePrompt = this.condensePrompt;
        }
        if (this.questionPrompt){
            body.questionPrompt = this.questionPrompt;
        }
        if (this.temperature !== null){
            body.temperature = this.temperature;
        }

        fetch(this.apiPath+"/talk/query", {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + this.apiKey,
                "Expires": this.expires,
                "Signature": this.signature,
            },
            body: JSON.stringify(body)
        })
        .then(res => { 
            if (!res.ok){
                throw new Error(res.status + " " + res.statusText);
            }
            
            var data = res.json();
            if (data.status && data.status === 'error'){
                throw new Error(data.message);
            }

            return data; 
        })
        .then(data => {
            this.addAssistantChat(data);
        }).catch((err => {
            console.log(err);
            this.addErrorChat("Sorry, there seems to be something wrong with my network connection.  Please try again later.");
        }).bind(this));
    }

    /**
     * Get the history of the chatbot conversation
     * 
     * @returns {array} An array of objects representing the conversation history
     */
    getTranscript(){
        let transcript = [];
        this.root.querySelectorAll('.ubeta-message').forEach((message) => {
            transcript.push({"user": message.getAttribute('aria-label'), "message": message.innerText});
        });

        return transcript;
    }


    /**
     * Add a message to the chat log on behalf of the chatbot
     * 
     * @param {string} message A response from the chatbot to add to the chat log
     */
    addAssistantChat(data){

        //enable chat input
        this.root.querySelector('.ubeta-console').removeAttribute('disabled');
        this.root.querySelector('.ubeta-ellipsis').setAttribute('hidden', true);

        var sources = '';
        if (this.showSource && data.sourceDocuments.length > 0){
            var id = window.crypto.randomUUID();
            sources = `
            <div class='ubeta-sources-container'>
                <button id='button-${id}' class='ubeta-sources-button'>
                    <svg class='ubeta-sources-icon ubeta-info-icon' fill="#000000" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><path d="M960 0c530.193 0 960 429.807 960 960s-429.807 960-960 960S0 1490.193 0 960 429.807 0 960 0Zm223.797 707.147c-28.531-29.561-67.826-39.944-109.227-39.455-55.225.657-114.197 20.664-156.38 40.315-100.942 47.024-178.395 130.295-242.903 219.312-11.616 16.025-17.678 34.946 2.76 49.697 17.428 12.58 29.978 1.324 40.49-9.897l.69-.74c.801-.862 1.591-1.72 2.37-2.565 11.795-12.772 23.194-25.999 34.593-39.237l2.85-3.31 2.851-3.308c34.231-39.687 69.056-78.805 115.144-105.345 27.4-15.778 47.142 8.591 42.912 35.963-2.535 16.413-11.165 31.874-17.2 47.744-21.44 56.363-43.197 112.607-64.862 168.888-23.74 61.7-47.405 123.425-70.426 185.398l-2 5.38-1.998 5.375c-20.31 54.64-40.319 108.872-53.554 165.896-10.575 45.592-24.811 100.906-4.357 145.697 11.781 25.8 36.77 43.532 64.567 47.566 37.912 5.504 78.906 6.133 116.003-2.308 19.216-4.368 38.12-10.07 56.57-17.005 56.646-21.298 108.226-54.146 154.681-92.755 47.26-39.384 88.919-85.972 126.906-134.292 12.21-15.53 27.004-32.703 31.163-52.596 3.908-18.657-12.746-45.302-34.326-34.473-11.395 5.718-19.929 19.867-28.231 29.27-10.42 11.798-21.044 23.423-31.786 34.92-21.488 22.987-43.513 45.463-65.634 67.831-13.54 13.692-30.37 25.263-47.662 33.763-21.59 10.609-38.785-1.157-36.448-25.064 2.144-21.954 7.515-44.145 15.046-64.926 30.306-83.675 61.19-167.135 91.834-250.686 19.157-52.214 38.217-104.461 56.999-156.816 17.554-48.928 32.514-97.463 38.834-149.3 4.357-35.71-4.9-72.647-30.269-98.937Zm63.72-401.498c-91.342-35.538-200.232 25.112-218.574 121.757-13.25 69.784 13.336 131.23 67.998 157.155 105.765 50.16 232.284-29.954 232.29-147.084.005-64.997-28.612-111.165-81.715-131.828Z" fill-rule="evenodd"></path></svg>
                </button>
                <ul id='content-${id}' class='ubeta-sources' hidden>${
                    data.sourceDocuments.map((source) => {
                        return `<li>${source.pageContent}</li>`;
                    }).join('')
                }</ul>
            </div>`;
        }

        var log = this.root.querySelector('.ubeta-chat-log');
        log.appendChild(new DOMParser().parseFromString(`
            <div class='ubeta-message ubeta-assistant' aria-label='assistant'>
                <div class='ubeta-text'>${data.text}</div>
                ${sources}
            </div>
        `, "text/html").body.firstElementChild);
        if (sources != ''){
            this.root.querySelector(`#button-${id}`).addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                this.root.querySelector(`#content-${id}`).toggleAttribute('hidden');
            });
        }

        log.scrollTop = log.scrollHeight
    }

    /**
     * Add a message to the chat log on behalf of the user
     * 
     * @param {string} message A message from the user to add to the chat log
     */
    addUserChat(message){
        this.askOracle(message);

        //disable chat input until resonse is received
        this.root.querySelector('.ubeta-console').setAttribute('disabled', true);

        var log = this.root.querySelector('.ubeta-chat-log');
        log.appendChild(new DOMParser().parseFromString(`
            <div class='ubeta-message ubeta-user' aria-label='user'>
                ${message}
            </div>
        `, "text/html").body.firstElementChild);

        log.scrollTop = log.scrollHeight

        this.root.querySelector('.ubeta-ellipsis').removeAttribute('hidden');

    }

    /**
     * Add an error message to the chat log
     * 
     * @param {string} message An error message to add to the chat log
     */
    addErrorChat(message){

        //enable chat input
        this.root.querySelector('.ubeta-console').removeAttribute('disabled');
        this.root.querySelector('.ubeta-ellipsis').setAttribute('hidden', true);

        var log = this.root.querySelector('.ubeta-chat-log');
        log.appendChild(new DOMParser().parseFromString(`
            <div class='ubeta-message ubeta-error-chat' aria-label='error'>
                ${message}
            </div>
        `, "text/html").body.firstElementChild);

        log.scrollTop = log.scrollHeight
    }

    /**
     * Resize the chat window
     */
    resizeWindow = (e) => {
        const dx = this.mouseStartX - e.x;
        const dy = this.mouseStartY - e.y;
        const panel = this.root.querySelector('.ubeta-chat-window');
        this.mouseStartX = e.x;
        this.mouseStartY = e.y;
        panel.style.width = (parseInt(getComputedStyle(panel, '').width) + dx) + "px";
        panel.style.height = (parseInt(getComputedStyle(panel, '').height) + dy) + "px";
    }

}