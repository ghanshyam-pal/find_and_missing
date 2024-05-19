import face_recognition
import sys

def main(image1_path, image2_path):
    # Your logic or processing based on the argument goes here
    image1 = face_recognition.load_image_file(image1_path)
    image2 = face_recognition.load_image_file(image2_path)

    # Find the face embeddings for each image
    image1_encodings = face_recognition.face_encodings(image1)
    image2_encodings = face_recognition.face_encodings(image2)

    # Check if faces were detected in both images
    if len(image1_encodings) == 0:
        return False

    if len(image2_encodings) == 0:
        return False

    # Compare the first face encoding in each image
    match = face_recognition.compare_faces([image1_encodings[0]], image2_encodings[0])
    return match[0]
    # output = f"Received argument: {argument}"
    # return output

if __name__ == "__main__":

    img1 = sys.argv[1]
    img2 = sys.argv[2]

    result = main(img1,img2)

    # Print the result
    print(result)