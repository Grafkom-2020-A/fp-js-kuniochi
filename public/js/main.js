import * as THREE from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/build/three.module.js';
import {OrbitControls} from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/examples/jsm/controls/OrbitControls.js';
import {GLTFLoader} from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/examples/jsm/loaders/GLTFLoader.js';

var canvas = document.querySelector("canvas");

// add scene
var scene = new THREE.Scene();
scene.background = new THREE.Color(0xffffff);
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
camera.position.set(0, 0, 20);

// add renderer
// var renderer = new THREE.WebGLRenderer();
var renderer = new THREE.WebGLRenderer({canvas: canvas});
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

const crystal = new GLTFLoader();
const crystal1 = new GLTFLoader();

crystal.load('/js/models/glb/crystal.glb', function(gltf) {
    scene.add(gltf.scene);
}, undefined, function (error){
    console.error(error);
} );

crystal1.load('/js/models/glb/crystal-1.glb', function(gltf) {
    scene.add(gltf.scene);
}, undefined, function (error){
    console.error(error);
} );

// var camera_pivot = new THREE.Object3D()
// var Y_AXIS = new THREE.Vector3( 0, 1, 0 );

// scene.add( camera_pivot );
// camera_pivot.add( camera );
// camera.position.set(0, 0, -10);
// camera.lookAt( camera_pivot.position );

// camera_pivot.rotateOnAxis( Y_AXIS, 0.01 );

// add orbit control
var controls = new OrbitControls(camera, renderer.domElement);
// controls.update();

console.log(camera.position);

// Directional light
var directionalLight = new THREE.DirectionalLight(0xff1493, 1.0);
directionalLight.position.set(6, 1, -5);
// directionalLight.target.position.set(0, 0, 0);
// directionalLight.target = cube;
// directionalLight.castShadow = true;

scene.add(directionalLight);

const animate = function () {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render( scene, camera );
};

animate();