import React from "react";

function useFetch() {
  const [state, dispatch] = React.useReducer(reducer, { status: "idle" });
  React.useEffect(() => {
    dispatch({ type: "request-start" });
    fetch("https://example.com/topics")
      .then((data) => {
        dispatch({ type: "response-success", data });
      })
      .catch((error) => {
        dispatch({ type: "response-error", error });
      });
  }, []);
  return state;
}

function Topics() {
  const state = useFetch();
  return (
    <div>
      {state.status === "loading" && <span>Loading...</span>}
      {state.status === "error" && <div>Error: {state.error.message}</div>}
      {state.status === "success" && (
        <ul>
          {state.data.map((topic) => (
            <li key={topic.id}>
              {topic.name}: {topic.url}
            </li>
          ))}
        </ul>
      )}
    </div>
  );
}
