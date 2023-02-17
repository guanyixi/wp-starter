import React, { useState } from "react"

function ExampleReactComponent() {
  const [clickCount, setClickCount] = useState(0)

  return (
    <div className="example-react-component" onClick={() => setClickCount(prev => prev + 1)}>
      <h2>Hello from React!</h2>
      <p>You've clicked {clickCount} times.</p>
    </div>
  )
}

export default ExampleReactComponent
