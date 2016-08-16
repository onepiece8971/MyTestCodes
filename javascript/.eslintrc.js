module.exports = {
    env: {
        browser: true,
        es6:     true,
        node:    true,
        jquery:  true,
    },
    extends: 'eslint:recommended',
    parserOptions: {
        ecmaVersion: 7,
        sourceType: 'module',
        ecmaFeatures: {
            jsx: true,
            experimentalObjectRestSpread: true,
        }
    },
    plugins: [
        'react'
    ],
    rules: {
        // 指定数组的元素之间要以空格隔开(,后面)， never参数：[ 之前和 ] 之后不能带空格，always参数：[ 之前和 ] 之后必须带空格
        "array-bracket-spacing": [2, "never"],
        // 在块级作用域外访问块内定义的变量是否报错提示
        "block-scoped-var": 0,
        // if while function 后面的{必须与if在同一行，java风格。
        "brace-style": [2, "1tbs", { "allowSingleLine": true }],
        // 双峰驼命名格式
        "camelcase": 2,
        // 控制逗号前后的空格
        "comma-spacing": [2, { "before": false, "after": true }],
        indent: [2, 4, {"SwitchCase": 1}],
        'quotes': ['error', 'single'],
        'linebreak-style': ['error', 'unix'],
        'semi': ['error', 'never'],
        'comma-dangle': ['warn', 'always-multiline'],
        'constructor-super': 'error',
        'no-confusing-arrow': 'error',
        'no-constant-condition': 'error',
        'no-class-assign': 'error',
        'no-const-assign': 'error',
        'no-dupe-class-members': 'error',
        'no-var': 'warn',
        'no-this-before-super': 'error',
        'object-shorthand': ['error', 'always'],
        'prefer-spread': 'warn',
        'prefer-template': 'warn',
        'require-yield': 'error',
        'jsx-quotes': 'warn',
        'react/forbid-prop-types': 'warn',
        'react/jsx-boolean-value': 'warn',
        'react/jsx-closing-bracket-location': 'warn',
        'react/jsx-curly-spacing': 'warn',
        'react/jsx-indent-props': 'warn',
        'react/jsx-max-props-per-line': 'warn',
        'react/jsx-no-bind': 'warn',
        'react/jsx-no-duplicate-props': 'warn',
        'react/jsx-no-undef': 'warn',
        'react/sort-prop-types': 'warn',
        'react/jsx-sort-props': 'warn',
        'react/jsx-uses-react': 'warn',
        'react/jsx-uses-vars': 'warn',
        'react/no-danger': 'warn',
        'react/no-did-mount-set-state': 'warn',
        'react/no-did-update-set-state': 'warn',
        'react/no-direct-mutation-state': 'warn',
        'react/no-multi-comp': 'warn',
        'react/no-set-state': 'warn',
        'react/no-unknown-property': 'warn',
        'react/prefer-es6-class': 'warn',
        'react/prop-types': 'warn',
        'react/react-in-jsx-scope': 'warn',
        'react/require-extension': 'warn',
        'react/self-closing-comp': 'warn',
        'react/sort-comp': 'warn',
        'react/wrap-multilines': 'warn'
    }
};