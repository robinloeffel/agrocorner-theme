/* eslint-disable */
if (window.navigator.userAgent.indexOf('MSIE') > 0) {
  document.body.style.overflow = 'hidden';

  // inject stylesheet
  var styles = document.createElement('link');
  styles.rel = 'stylesheet';
  styles.href = '/packages/agrocorner-theme/components/ie11/ie11.css';
  document.body.appendChild(styles);

  // overlay
  var overlay = document.createElement('div');
  overlay.className = 'ie11';

  // heading
  var heading = document.createElement('h1');
  heading.textContent = 'Excusez!';

  // lead
  var lead = document.createElement('h2');
  lead.textContent = 'Sie verwenden einen Webbrowser, den wir nicht mehr unterstützen.';

  // text
  var text = document.createElement('p');
  text.textContent = 'Um alle Funktionen unseres Angebots optimal nutzen zu können, empfehlen wir Ihnen, auf einen anderen Browser umzusatteln. Am Besten wählen Sie eine der folgenden Alternativen:';

  // ff
  var ff = document.createElement('a');
  ff.href = 'https://www.mozilla.org/de/firefox/new/';
  ff.target = '_blank';
  ff.textContent = 'Mozilla Firefox';

  // chrome
  var chrome = document.createElement('a');
  chrome.href = 'https://www.google.ch/chrome/';
  chrome.target = '_blank';
  chrome.textContent = 'Google Chrome';

  // edge
  var edge = document.createElement('a');
  edge.href = 'https://www.microsoft.com/de-de/edge';
  edge.target = '_blank';
  edge.textContent = 'Microsoft Edge';

  overlay.appendChild(heading);
  overlay.appendChild(lead);
  overlay.appendChild(text);
  overlay.appendChild(ff);
  overlay.appendChild(chrome);
  overlay.appendChild(edge);
  document.body.appendChild(overlay);
}
