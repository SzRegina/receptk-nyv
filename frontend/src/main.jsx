import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";
import "./index.css";
import { ReceptProvider } from "./context/ReceptContext";

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <ReceptProvider>
      <App />
    </ReceptProvider>
  </React.StrictMode>
);