# Passage Coding Test - Matrix Evaluator

Matrix Evaluator is a PHP class collection for evaluating square matrices.

### Installation

This Matrix toolkit is intended to use with local environment in Docker containers. Recommended in every case of web app developments nowadays due to its CI/CD advantages and ease of use in a collaborative team.

To start using the tool, make sure that you have Docker installed on your system. Run in terminal (or WSL terminal) the following command in the project folder:

``docker compose up -d``

This will start the containers, and then you can run the app in your browser normally in http://localhost

(Noticed a docker-compose.yaml file? well, that's the file with the deployment configuration of the containers. You can add more containers according your needs but for this particular project it's not necessary).

### Modifying the test cases

Since it doesn't contain unit tests because the timeline, you can just add more arrays o modifying existing in ``index.php`` file in the ``$matrixPool`` variable.

### Validations

The ``\Passage\Processor\SquareMatrixEvaluator`` class evaluates if the array is compliant with the following rules:

- The array is binary, which means that can only contain 0s and 1s.
- The array is nxn.
- The array dimension should not be more than 1000 (columns or rows).