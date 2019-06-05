    const {createElement} = React
const {render} = ReactDOM
const style={
    color:'#3878bc'
}
const title = createElement(
    'h1',
    {
        id:'title',
        className:'header',
        style:style
    },
    'Hello React, Hlokoloza is ON! '
)

render(
    title,
    document.getElementById('react-container')
)

const content = createElement(
    'p',
    {id:'react-content'},
    'React is very interesting, it is very nice learning it'
)

// render(
//     content,
//     document.getElementById('react-container')
// )