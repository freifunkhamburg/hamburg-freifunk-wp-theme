# hamburg-freifunk-wp-theme (2019)

Wordpress Theme for the Website of Freifunk Hamburg, https://hamburg.freifunk.net with FoundationPress + Foundation 6 Sites

## Installation

FoundationPress relies to not-up-to-date dependencies, works with node.js ~6, use n to install older version node.js

`$ n 6`

Install gulp

`$ sudo npm -g install gulp`

Install node modules

`$ npm install`

If there is a problem with babel versions, like

`
 babel-loader@8 requires Babel 7.x (the package '@babel/core'). If you'd like to use Babel 6.x ('babel-core'), you should install 'babel-loader@7'.
`
...try...

`$ npm install --save-dev babel-loader@7`

Keep dependencies updated

`$ ncu`

`$ ncu -u`

(Install ncu with `$ npm install -g npm-check-updates`)

## Development

During design/development, render SCSS etc:

`$ npm start`

## Depliy

Render and pack for deployment

`$ npm run package`

(zip file will be located in packaged folder)
