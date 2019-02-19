hamburg-freifunk-wp-theme (2018)

FoundationPress relies to not-up-to-date dependencies, works with node.js ~6, use n to install older version node.js

$ n 6

keep dependencies updated

$ ncu

$ ncu -u

(install ncu with $ npm install -g npm-check-updates)

during design/development, render SCSS etc:

$ npm start

render and pack for deployment

$ npm run package

(zip file will be located in packaged folder)