import { MySample } from "components/sample";
import React from "react";
import ReactDom from "react-dom";
import style from "./styles.less";

const App = () => (
	<div className={style.boxes}>
		<h1>Application</h1>
		<h2>I'm ReactJS version {React.version}</h2>
		<p>Below we're using another component</p>
		<MySample />
	</div>
);

ReactDom.render(<App />, document.getElementById("app"));
