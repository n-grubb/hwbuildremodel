import sendgrid from "@sendgrid/mail";

sendgrid.setApiKey(process.env.SENDGRID_API_KEY);

async function handler(req, res) {
    try {
      await sendgrid.send({
        to: "jon@hwbuildremodel.com",    // where to send form submissions 
        from: 'jon@hwbuildremodel.com',  // the sender's contact email
        subject: `Contact form submission: ${req.body.firstname} ${req.body.lastname}`,
        text: `
            Name: ${req.body.firstname} ${req.body.lastname} \n
            Email: ${req.body.email} \n
            Phone: ${req.body.phone} \n\n
            Message: ${req.body.message}
        `,
      });
    } catch (error) {
        return res.status(error.statusCode || 500).json({ error: error.message });
    }
    return res.status(200).json({ error: "" });
}
  
export default handler;