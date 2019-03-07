hamburg-freifunk-wp-theme (2018)

FoundationPress relies to not-up-to-date dependencies, works with node.js ~6, use n to install older version node.js

$ n 6

install gulp

$ sudo npm -g install gulp

install node modules

$ npm install

it there is a problem with babel versions, like

`
 babel-loader@8 requires Babel 7.x (the package '@babel/core'). If you'd like to use Babel 6.x ('babel-core'), you should install 'babel-loader@7'.
`

try...

$ npm install --save-dev babel-loader@7


keep dependencies updated

$ ncu

$ ncu -u

(install ncu with $ npm install -g npm-check-updates)

during design/development, render SCSS etc:

$ npm start

render and pack for deployment

$ npm run package

(zip file will be located in packaged folder)