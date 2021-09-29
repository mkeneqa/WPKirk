import React from "react";
import styled from "styled-components";

const View = styled.div`
	background-color: #fff;
	text-align: center;
	width: 300px;
	border-radius: 16px;
	padding: 16px;

	transition: all 0.3s ease-in-out;

	&:hover {
		box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
		transform: translateY(-4px);
	}
`;

export const MySample = () => {
	return (
		<View>
			<h1>Hello, World!</h1>
			<h2>I'm a styled React Component</h2>
		</View>
	);
};
